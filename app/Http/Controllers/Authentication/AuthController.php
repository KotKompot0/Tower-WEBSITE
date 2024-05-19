<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\LoginUserRequest;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Traits\HttpResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    use HttpResponse;

    public function login(LoginUserRequest $request)
    {
        $data = $request->validated();
        $user = User::whereUsername($request->username)->first();
        if (!$user || !Hash::check($data['password'], $user->password)) {
            return $this->error('', 401, message: 'Неправильный логин или пароль!');
        }
        $user->tokens()->delete();
        $token = $user->createToken('API token of ' . $user->username)->plainTextToken;
        return $this->success([
            'user' => new UserResource($user),
            'token' => $token,
        ], 'User has been login!');
    }

    public function register(StoreUserRequest $request)
    {
        $user = User::create($request->validated());
        $token = $user->createToken('API token of ' . $user->username)->plainTextToken;
        return $this->success([
            'user' => new UserResource($user),
            'token' => $token,
        ], 'User has been created!');
    }

    public function logout(Request $request) {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logged out successfully!'
        ]);
    }
}
