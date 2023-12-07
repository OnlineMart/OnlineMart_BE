<?php

namespace App\Http\Controllers\API\User;

use App\Http\Helpers\S3Helper;
use App\Http\Requests\Review\ReviewProductRequest;
use App\Models\ReviewMedia;
use Exception;
use App\Models\Review;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Probots\Pinecone\Client as Pinecone;
use App\Http\Controllers\Controller;
use App\Http\Requests\Review\ReplyRequestStore;

class ReviewController extends Controller
{

    private S3Helper $upload;
    public function __construct()
    {
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
            $userId = auth()->user()->id;
            $data = $request->validated();

            $reviewProduct = Review::create([
                'user_id' => $userId,
                'product_id' => $data['product_id'],
                'order_id' => $data['order_id'],
                'content' => $data['content'] ?? "",
                'rating' => $data['rating'],
                'agree' => $data['agree'],
                'disagree' => $data['disagree']
            ]);

            if (isset($data['images'])) {
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
                'media' => $reviewMedia->map(function ($media) {
                    return [
                        $media
                    ];
                })->values(),
            ];

            return jsonResponse($response, 200, 'Review product successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }
}
