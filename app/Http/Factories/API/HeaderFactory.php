<?php

namespace App\Http\Factories\API;

class HeaderFactory
{
    public static function default(array $headers = []): array
    {
        return array_merge(
            (array) config('api.headers.default'),
            $headers,
        );
    }

    public static function error(array $headers = []): array
    {
        return array_merge(
            (array) config('api.headers.error'),
            $headers,
        );
    }
}
