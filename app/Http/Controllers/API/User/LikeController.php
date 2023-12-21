<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Review;
use Exception;
use Illuminate\Http\JsonResponse;

class LikeController extends Controller
{

    /**
     * Lấy ra tất cả số lượt like của một sản phẩm
     *
     * @param int $productId
     *
     * @return JsonResponse
     */
    public function getAllLike(int $productId): JsonResponse
    {
        try {
            $likes = Like::where('product_id', $productId)->get();

            $response = $likes->map(function ($like) {
                if ($like->status > 0) {
                    return [
                        'id'         => $like->id,
                        'status'     => $like->status,
                        'user_id'    => $like->user_id,
                        'product_id' => $like->product_id,
                        'review_id'  => $like->review_id,
                        'created_at' => $like->created_at,
                    ];
                }
            });

            $response = $response->filter()->values();

            return jsonResponse($response, 200, 'Lấy danh sách lượt like theo sản phẩm thành công!');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Có lỗi xảy ra!');
        }
    }


    /**
     * Cập nhật lượt thích cho một đánh giá
     *
     * @param int $userId
     * @param int $productId
     * @param int $reviewId
     *
     * @return JsonResponse
     */
    public function updateLikeStatus(int $userId, int $productId, int $reviewId): JsonResponse
    {
        try {
            $like = Like::where('user_id', $userId)
                ->where('product_id', $productId)
                ->where('review_id', $reviewId)
                ->first();

            $review = Review::findOrFail($reviewId);

            if (!$like) {
                // Create a new Like instance if it doesn't exist
                $like = new Like();
                $like->user_id = $userId;
                $like->product_id = $productId;
                $like->review_id = $reviewId;
            }

            // Toggle the like status and update like_count
            $like->status = !$like->status;
            if ($like->status) {
                $review->like_count += 1;
            } else {
                $review->like_count -= 1;
            }

            $like->save();
            $review->save();

            return jsonResponse($like, 200, 'Cập nhật lượt thích thành công!');
        } catch (Exception $e) {
            return jsonResponse($e->getMessage(), 500, 'Có lỗi xảy ra');
        }
    }


}
