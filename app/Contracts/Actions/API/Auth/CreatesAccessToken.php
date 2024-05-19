<?php

namespace App\Contracts\Actions\API\Auth;

use App\Models\User;
use Laravel\Sanctum\NewAccessToken;

interface CreatesAccessToken
{
    public function __invoke(User $user, string $name, array $abilities = ['*']): NewAccessToken;
}
