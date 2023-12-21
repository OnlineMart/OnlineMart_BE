<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Review\ReplyRequestStore;
use App\Models\Review;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
        // $this->middleware('permission:View reviews', ['only' => ['index']]);
        // $this->middleware('permission:Reply reviews', ['only' => ['replyReview']]);
    }

    /**
     * Lấy danh sách reviews
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        try {
            $reviews = Review::with([
                'user',
                'product',
                'shop',
                'review_media:id,review_id,media',
                'product.product_media:id,product_id,media,is_main',
                'product.category:id,name',
                'shop.supplier:id,name',
            ])
                ->where('shop_id', auth()->user()->shop_id)
                ->whereNull('parent_id')
                ->orderBy('id', 'DESC')->get();

            $response = $reviews->map(function ($review) {
                $product_thumbnail = $review->product->product_media->firstWhere('is_main', true)->media ?: null;
                $adminReply        = Review::where('parent_id', $review->id)
                    ->where('shop_id', auth()->user()->shop_id)->first();

                return [
                    'id'                => $review->id,
                    'product_id'        => $review->product_id,
                    'product_name'      => $review->product->name,
                    'product_sku'       => $review->product->sku,
                    'category'          => $review->product->category->name,
                    'brand'             => $review->product->supplier->name,
                    'product_thumbnail' => $product_thumbnail,
                    'user'              => $review->user->user_name,
                    'full_name'         => $review->user->full_name,
                    'user_avatar'       => $review->user->avatar,
                    'content'           => $review->content,
                    'image'             => $review->review_media,
                    'rating'            => $review->rating,
                    'shop_id'           => $review->shop_id,
                    'parent_id'         => $review->parent_id,
                    'reply_admin'       => $adminReply ? $adminReply->content : null,
                    'shop_avatar'       => $review->shop->avatar,
                    'shop_name'         => $review->shop->name,
                    'review_date'       => $review->created_at,
                ];
            });
            return jsonResponse($response, 200, 'Get data successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }

    /**
     * Trả lời review
     *
     * @param ReplyRequestStore $request
     * @param int               $reviewId
     *
     * @return JsonResponse
     */
    public function replyReview(ReplyRequestStore $request, int $reviewId): JsonResponse
    {
        try {
            $data   = $request->validated();
            $review = Review::find($reviewId);
            $shopId = auth()->user()->shop_id;
            $reply  = Review::create([
                'user_id'    => $review->user_id,
                'shop_id'    => $shopId,
                'product_id' => $review->product_id,
                'content'    => $data['content'],
                'rating'     => $review->rating,
                'like_count' => $review->like_count,
                'parent_id'  => $review->id,
            ]);
            return jsonResponse($reply, 200, 'Reply review successfully');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Something went wrong');
        }
    }
}
