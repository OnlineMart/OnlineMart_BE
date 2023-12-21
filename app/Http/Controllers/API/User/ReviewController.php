<?php

namespace App\Http\Controllers\API\User;

use Exception;
use App\Models\Review;
use App\Models\ReviewMedia;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Helpers\S3Helper;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Review\ReplyRequestStore;
use App\Http\Requests\Review\ReviewProductRequest;

class ReviewController extends Controller
{

    private S3Helper $upload;
    public function __construct()
    {
        $this->middleware('auth:api')->only("commentReview");
        $this->upload = new S3Helper();
    }

    /**
     * Đánh giá sản phẩm
     *
     * @param ReviewProductRequest $request
     * @return JsonResponse
     */
    public function store(ReviewProductRequest $request): JsonResponse
    {
        try {
          
            $data = $request->validated();
            $reviewProduct = Review::create([
                'user_id' => $data['user_id'],
                'product_id' => $data['product_id'],
                'order_id' => $data['order_id'],
                'content' => $data['content'] ?? "",
                'rating' => $data['rating'],
                'agree' => $data['agree'],
                'shop_id' => $data['shop_id'],
                'disagree' => $data['disagree']
            ]);
                    
            if(isset($data['images'])) {
                foreach ($data['images'] as $image) {
                    $reviewProduct->review_media()->create([
                        'review_id' => $reviewProduct->id,
                        'media' => $this->upload->uploadSingleFileToS3($image, 'reviews'),
                    ]);
                }
            }

            return jsonResponse($reviewProduct, 200, 'Review product successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Lấy đánh giá sản phẩm dựa trên userId và productId
     *
     * @param $userId
     * @param $productId
     * @return JsonResponse
     */
        public function getReviewProduct($userId, $productId): JsonResponse
        {
            try {
                $reviewProduct = Review::where('user_id', $userId)
                    ->where('product_id', $productId)
                    ->select('id', 'content', 'rating', 'agree', 'disagree')
                    ->first();


                if (!$reviewProduct) {
                    return jsonResponse([], 204, "Not found");
                }

                $reviewId = $reviewProduct->id;

                $reviewMedia = ReviewMedia::where('review_id', $reviewId)
                    ->select('media')
                    ->get();

                $response = [
                    'id' => $reviewId,
                    'content' => $reviewProduct->content,
                    'rating' => $reviewProduct->rating,
                    'agree' => $reviewProduct->agree,
                    'disagree' => $reviewProduct->disagree,
                    'media'    => $reviewMedia->map(function ($media) {
                        return [
                        'review_media' =>  $media
                        ];
                    })->values(),
                ];

                return jsonResponse($response, 200, 'Review product successfully');
            } catch (Exception $e) {
                return jsonResponse($e->getMessage(), 500, 'Something went wrong');
            }
        }

    /**
     * Lấy ra tất cả các review theo product_id
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function getCustomerReviews(Request $request): JsonResponse
    {

        try {
            $productId = $request->product_id;

            $reviews = Review::with([
                'user:id,user_name,avatar,created_at',
                'product:id',
                'review_media:review_id,media',
                'replies' => function ($query) {
                    $query->orderBy('id', 'DESC');
                },
                'replies.user',

                // TODO: Cần lấy thêm thông tin của sản phẩm (biến thể,...) để hiển thị
                // TODO: Cần "Ngày đã dùng" = Ngày nhận hàng - Ngày review
            ])->where('product_id', $productId)
                ->whereNull("parent_id")
                ->orderBy('id', 'DESC')
                ->get();

            return jsonResponse($reviews, 200, 'Reviews render successfull!');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }


    /**
     * Lấy ra tất cả hình ảnh trong tất cả bình luận của một sản phẩm
     *
     * @param int $productId
     *
     * @return JsonResponse
     */
    public function getAllImages(int $productId): JsonResponse
    {
        try {
            $images = Review::where('product_id', $productId)
                ->with('review_media')
                ->get()
                ->pluck('review_media.*.media')
                ->flatten();

            return jsonResponse($images, 200, 'Lấy hình ảnh từ các bình luận thành công!');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Có lỗi xảy ra');
        }
    }


    /**
     * Lấy số lượt đánh giá và thống kê từ 1-5 cho một sản phẩm
     *
     * @param int $productId
     *
     * @return JsonResponse
     */
    public function getRating(int $productId): JsonResponse
    {
        $ratings = Review::where('product_id', $productId)->pluck('rating')->toArray();

        $counts = array_fill(1, 5, 0);

        foreach ($ratings as $rating) {
            $roundedRating = round($rating);
            if (isset($counts[$roundedRating])) {
                $counts[$roundedRating]++;
            }
        }

        $total = array_sum($counts);

        $result = [];
        for ($i = 1; $i <= 5; $i++) {
            $count = $counts[$i];
            $percent = $total > 0 ? round(($count / $total) * 100) : 0;

            $result[$i] = [
                'count'   => $count,
                'percent' => $percent,
            ];
        }

        return jsonResponse($result, 200, "ok");
    }


    /**
     * Tạo comment mới (người khác sẽ bình luận bên dưới một review nào đó = trả lời bình luận đã tồn tại)
     *
     * @param ReplyRequestStore $request
     * @param int               $reviewId
     * @param int               $productId
     *
     * @return JsonResponse
     */
    public function commentReview(ReplyRequestStore $request, int $reviewId, int $productId): JsonResponse
    {
        try {
            $data = $request->validated();

            $comment = Review::create([
                'user_id'    => auth()->user()->id,
                'product_id' => $productId,
                'shop_id'    => null,
                'content'    => $data['content'],
                'rating'     => null,
                'like_count' => 0,
                'agree'      => null,
                'disagree'   => null,
                'parent_id'  => $reviewId,
            ]);

            return jsonResponse($comment, 200, 'Commenting on a review has been successfully !');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR, 'Something went wrong');
        }
    }
}
