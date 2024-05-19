<?php

namespace App\Providers;

use App\Actions\API\Auth\CreateAccessToken;
use App\Contracts\Actions\API\Auth\CreatesAccessToken;
use Illuminate\Support\ServiceProvider;

class ActionServiceProvider extends ServiceProvider
{
    public array $bindings = [
        CreatesAccessToken::class => CreateAccessToken::class,
    ];
}
