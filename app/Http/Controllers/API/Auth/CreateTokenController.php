<?php

namespace App\Http\Controllers\API\Auth;

use App\Contracts\Actions\API\Auth\CreatesAccessToken;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\GetTokenRequest;
use App\Http\Resources\API\Auth\NewAccessTokenResource;

class CreateTokenController extends Controller
{
    public function __invoke(GetTokenRequest $request, CreatesAccessToken $createAccessToken)
    {
        // See if the user is registered
        $user = $request->authenticate();

        // Generate the access token
        $token = $createAccessToken(
            user: $user,
            name: $request->string('device')->toString()
        );

        return new NewAccessTokenResource(
            resource: $token,
        );
    }
}
