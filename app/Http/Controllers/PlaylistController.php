<?php

namespace App\Http\Controllers;

use App\playlist;
use App\music_playlist;
use App\music;
use Illuminate\Http\Request;
use Auth;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $playlist = playlist::where('user_id', $user_id)
        ->get();
        
        //dd($playlist);
        return view('playlist/view')
            ->with('playlist', $playlist)
            ->with('user', $user_id);
    }

    public function play($id)
    {
        $user_id = Auth::user()->id;
        $playlist = playlist::where('user_id', $user_id)
        ->get();
        $musics = music_playlist::join('musics', 'musics.id', '=', 'music_playlist.music_id')
            ->select('musics.id AS mid', 'musics.title AS title', 'musics.artist AS artist', 'musics.album_name AS album_name', 'musics.album_image AS album_image', 'musics.file AS file', 'music_playlist.id AS mpid', 'music_playlist.position AS position')
            ->where('playlist_id', $id)
            ->orderBy('position', 'asc')
            ->get();
        $firstOnPlaylist = music_playlist::where('playlist_id', $id)->min('position');
        
        $first = music_playlist::join('musics', 'musics.id', '=', 'music_playlist.music_id')
            ->select('musics.id AS id', 'musics.title AS title', 'musics.artist AS artist', 'musics.album_name AS album_name', 'musics.album_image AS album_image', 'musics.file AS file', 'music_playlist.id AS mpid', 'music_playlist.position AS position')
            ->where('playlist_id', $id)
            ->where('position', $firstOnPlaylist)
            ->first();
        // /dd($first);
        //dd($musics[0]);
        return view('playlist/play')
            ->with('playlist', $playlist)
            ->with('musics', $musics)
            ->with('user', $user_id)
            ->with('first', $first)
            ->with('playlistID', $id);
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
        //dd($request);

        return redirect('playlists');
    }

    public function storeMusic(Request $request)
    {
        $alreadyAdded = music_playlist::where('music_id', $request->music_id)
            ->where('playlist_id', $request->playlist_id)
            ->first();

        if($alreadyAdded) {
            return 'error';
        } else {
            
            $notEmpty = music_playlist::first();
            if($notEmpty) {
                $alreadyAdded = music_playlist::where('playlist_id', $request->playlist_id)->latest()->value('position');
                $position = $alreadyAdded + 1;
            } else {
                $position = 1;
            }
            $music_playlist = new music_playlist;
            $music_playlist->music_id = $request->music_id;
            $music_playlist->playlist_id = $request->playlist_id;
            $music_playlist->position = $position;
            $music_playlist->save();
            // //dd($request);

            // return redirect('playlists');
            return 'success';
        }

        
    }

    public function swapPosition(Request $request)
    {
        $music_playlist = music_playlist::find($request->id);
        $music_playlist->position = $request->toPosition;

        $to_music_playlist = music_playlist::find($request->toId);
        $to_music_playlist->position = $request->position;

        $music_playlist->save();
        $to_music_playlist->save();

        return 'success';
    }
    
    public function deleteMusicToPlaylist(Request $request)
    {
        music_playlist::where('id', $request->id)->delete();

        return 'success';
    }

    public function renamePlaylist(Request $request)
    {
        $playlist = playlist::where('id', $request->id)->first();
        $playlist->name = $request->new_name;
        $playlist->save();

        return 'success';
    }

    public function deletePlaylist(Request $request)
    {
        music_playlist::where('playlist_id', $request->id)->delete();
        playlist::find($request->id)->delete();
        //route('playlists');
        return 'success';
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
