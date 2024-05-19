<?php

namespace App\Http\Resources\API;

use App\Http\Factories\API\HeaderFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;

abstract class Resource extends JsonResource
{
    public function __construct(
        mixed $resource,
        private int $status = Response::HTTP_OK
    ) {
        parent::__construct($resource);
    }

    public function jsonOptions()
    {
        return JSON_UNESCAPED_SLASHES;
    }

    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response
            ->setStatusCode($this->status)
            ->withHeaders(HeaderFactory::default());
    }
}
