<?php

namespace App\Http\Controllers;

use App\podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $podcast = podcast::paginate(12);
        return view('podcast/view')
            ->with('podcast', $podcast);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('podcast/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'host' => 'required|max:255',
            'thumbnail' => 'required|file|max:20000|mimes:jpeg,jpg,png,svg',
            'file' => 'required|file|mimes:mpga,wav',
            'description' => 'required',
        ]);

        //upload the image
        $imageName = 'i'.time().'.'.request()->album_image->getClientOriginalExtension();

        request()->album_image->move(public_path('image/cover'), $imageName);

        //upload the music
        $musicName = 'm'.time().'.'.request()->file->getClientOriginalExtension();

        request()->file->move(public_path('mp3'), $musicName);

        $music = new Music;
        $music->title = $request->title;
        $music->artist = $request->artist;
        $music->album_name = $request->album;
        $music->album_image = $imageName;
        $music->file = $musicName;
        $music->lyrics = $request->lyrics;
        $music->save();

        return view('music/confirm', compact("music"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function show(podcast $podcast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function edit(podcast $podcast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, podcast $podcast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\podcast  $podcast
     * @return \Illuminate\Http\Response
     */
    public function destroy(podcast $podcast)
    {
        //
    }
}
