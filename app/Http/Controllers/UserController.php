<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        return $request->user();
    }
    public function update(UpdateUserRequest $request)
    {
//
//        $status = 405;
//        $error = "Something is wrong";
//        $help = "Contact the sales team to verify";
//
//        return response(["error" => $error, "help" => $help], $status);
//        return response()->json($error, $status);
        $data = $request->validated();
        $user = User::whereId($request->user()->id);
        $user->update($data);
        return new UserResource($user->firstOrFail());
    }


//    public function update(UpdateRequest $request, Person $person)
//    {
//        $data = $request->validated();
//        $person->update($data);
//        return new PersonResource($person);
//    }
}
