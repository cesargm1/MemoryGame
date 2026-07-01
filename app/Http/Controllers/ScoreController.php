<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scores = Score::orderBy('points', 'desc')
            ->limit(10)
            ->get();
        return view('game.memory.ranking', [
            'scores' => $scores
        ]);
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
    public function store(Request $request)
    {
        $request->validate([
            "points" => 'required|integer',
            "game" => 'required|string'
        ]);
        Score::create([
            "user_id" => Auth::user()->id,
            "points" => $request->points,
            "game" => $request->game
        ]);

        return response()->json([
            "user_id" => Auth::user()->id,
            "points" => $request->points,
            "game" => $request->game,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
