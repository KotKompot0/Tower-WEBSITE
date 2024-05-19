<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;

class UserController extends Controller
{
    // toDo: валидация должна проверять данные, чтобы не совпадали с другими пользователями, но при этом не с текущим юсером
    public function update(UpdateUserRequest $request)
    {
        $data = $request->validated();
        $user = User::whereId($request->user()->id);
        $user->update($data);
        return new UserResource($user->firstOrFail());
    }
}
