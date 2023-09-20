<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;


if (!function_exists('jsonResponse')) {
    /**
     * @param null   $data
     * @param int    $status
     * @param string $message
     *
     * @return JsonResponse
     */
    function jsonResponse($data = null, int $status = Response::HTTP_OK, string $message = ''): JsonResponse
    {
        return response()->json([
            'success' => $status >= Response::HTTP_OK && $status < Response::HTTP_MULTIPLE_CHOICES,
            'message' => $message,
            'data'    => $data
        ], $status);
    }
}
