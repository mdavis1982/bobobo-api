<?php

namespace App\Actions\API\Auth;

use App\Contracts\Actions\API\Auth\CreatesAccessToken;
use App\Models\User;
use Laravel\Sanctum\NewAccessToken;

class CreateAccessToken implements CreatesAccessToken
{
    public function __invoke(User $user, string $name, array $abilities = ['*']): NewAccessToken
    {
        return $user->createToken(
            name: $name,
            abilities: $abilities
        );
    }
}
