<?php

namespace App\Http\Controllers;

use App\Models\Drawings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class DrawingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() {}

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
            "image" => 'required|image',
            "game" => 'required|string'
        ]);

        $path = Storage::disk("public")->putFile('img/drawings', $request->file('image'));

        Drawings::create([
            "user_id" => Auth::user()->id,
            "image" => $path,
            "game" => $request->game
        ]);

        return response()->json([
            "user_id" => Auth::user()->id,
            "image" => $path,
            "game" => $request->game
        ], 200);
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
