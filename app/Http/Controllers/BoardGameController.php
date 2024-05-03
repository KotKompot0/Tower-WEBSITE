<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBoardGameRequest;
use App\Http\Requests\UpdateBoardGameRequest;
use App\Http\Resources\GameResource;
use App\Models\BoardGame;
use Illuminate\Support\Facades\Response;

class BoardGameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        return response()->json(['message' => 'Page Not Found. If error persists, contact info@website.com'], 422);

        $boardGames = BoardGame::all();

        return GameResource::collection($boardGames);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBoardGameRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BoardGame $boardGame)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BoardGame $boardGame)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBoardGameRequest $request, BoardGame $boardGame)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BoardGame $boardGame)
    {
        //
    }
}
