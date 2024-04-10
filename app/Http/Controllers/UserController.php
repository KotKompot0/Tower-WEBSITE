<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $request)
    {
        return $request->user();
    }
}
