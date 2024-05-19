<?php

namespace App\Http\Resources\API\Auth;

use App\Http\Resources\API\Resource;
use Illuminate\Http\Request;

class NewAccessTokenResource extends Resource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'token' => $this->plainTextToken,
        ];
    }
}
