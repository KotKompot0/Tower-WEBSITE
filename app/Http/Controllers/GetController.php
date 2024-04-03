<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function __invoke(Request $request)
    {
        // TODO: Implement __invoke() method.
//        return $request->user();
//        dd('hello');
        return Activity::where('id', 1)->firstOrFail();
    }
}
