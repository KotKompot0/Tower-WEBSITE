<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request) {
        $path = $request->file('image')->store('dynamic', 'public');
        return $path;
    }

}
