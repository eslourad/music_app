<?php

namespace App\Http\Controllers;

use App\playlist;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $playlist = playlist::where('user_id', $id)
        ->get();
        //dd($playlist->isEmpty());
        return view('playlist/view')
            ->with('playlist', $playlist)
            ->with('user', $id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $playlist = new playlist;
        $playlist->name = $request->name;
        $playlist->user_id = $request->user;
        $playlist->save();

        dd($playlist);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(playlist $playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(playlist $playlist)
    {
        //
    }
}
