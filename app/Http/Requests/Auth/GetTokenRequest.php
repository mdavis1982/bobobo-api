<?php

namespace App\Http\Requests\Auth;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class GetTokenRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
            'device' => ['required', 'string', 'min:3', 'max:255'],
        ];
    }

    public function authenticate(): User
    {
        $user = User::query()
            ->where('email', $this->string('email')->toString())
            ->first();

        if (! $user || ! Hash::check($this->string('password')->toString(), $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return $user;
    }
}
