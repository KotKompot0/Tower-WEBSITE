<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait HttpResponse {
    protected function success($data, $message = null, $code = 200): JsonResponse
    {
        return response()->json([
            'status' => 'Request was successful',
            'message' => $message,
            'data' => $data,
        ], $code);
    }

    protected function error($data, $code, $message = null): JsonResponse
    {
        return response()->json([
            'status' => 'Error has occurred...',
            'message' => $message,
            'data' => $data,
        ], $code);
    }
}
