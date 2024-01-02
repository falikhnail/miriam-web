<?php

namespace App\Trait;

use Illuminate\Http\JsonResponse;

trait Api {

    private function commonResponse(
        int $statusCode = 200,
        bool $status = false,
        array $data = [],
        string $message = '',
        array $optionalData = []
    ): JsonResponse {
        $response = [
            'status'  => $status,
            'message' => $message,
            'data' => []
        ];

        if (count($data) > 0) {
            $response['data'] = $data;
        }
        if (count($optionalData) > 0) {
            $response = array_merge($response, $optionalData);
        }

        return response()->json($response, $statusCode);
    }

    /**
     * Summary of successJson
     * @param int $statusCode
     * @param array $data
     * @param string $message
     * @return \Illuminate\Http\JsonResponse|mixed
     */
    public function successJson(
        array $data = [],
        string $message = 'Successfully'
    ): JsonResponse {
        return $this->commonResponse(
            200,
            true,
            $data,
            $message
        );
    }

    public function errorJson(
        int $statusCode = 500,
        string $message,
        array $detail = [],
    ): JsonResponse {
        return $this->commonResponse(
            $statusCode,
            false,
            $detail,
            $message
        );
    }

    public function authJson($token) {
        return $this->commonResponse(
            200,
            true,
            [],
            'Successfully',
            [
                'token_type' => 'Bearer',
                'accessToken' => $token
            ]
        );
    }
}
