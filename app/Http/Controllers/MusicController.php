<?php

namespace App\Http\Controllers;

use App\playlist;
use Illuminate\Http\Request;
use App\Music;
use App\music_playlist;

class MusicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($id)
    {
        $user = auth()->user()->id;
        $music = Music::where('id', $id)
            ->first();
        $playlist = playlist::where('user_id', $user)
            ->get();
        return view('music/view')
            ->with('music', $music)
            ->with('user', $user)
            ->with('playlist', $playlist);
    }

    public function add()
    {
        $user = auth()->user()->id;
        return view('music/add', compact("user"));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'artist' => 'required|max:255',
            'album' => 'required|max:255',
            'artist' => 'required|max:255',
            'album_image' => 'required|file|max:20000|mimes:jpeg,jpg,png,svg',
            'file' => 'required|file|max:20000|mimes:mpga,wav',
            'lyrics' => 'required',
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

    public function search(Request $request)
    {
        $user = auth()->user()->id;

        switch ($request->category) {
            case 'title':
                $musics = Music::where('title', 'like', '%' . $request->keyword . '%')->paginate(12);
                break;
            case 'artist':
                $musics = Music::where('artist', 'like', '%' . $request->keyword . '%')->paginate(12);
                break;
            default:
                $musics = Music::where('album_name', 'like', '%' . $request->keyword . '%')->paginate(12);
        }
        $playlist = playlist::where('user_id', $user)->get();

        return view('home')
            ->with('musics', $musics)
            ->with('user', $user)
            ->with('isSearching', true)
            ->with('keyword', $request->keyword)
            ->with('category', $request->category)
            ->with('user', $user)
            ->with('playlist', $playlist);
    }

    public function edit($id)
    {
        $music = Music::where('id', $id)
        ->first();
        return view('music/edit', compact("music"));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'title' => 'required',
            'artist' => 'required',
            'album' => 'required',
            'artist' => 'required',
            'album_image' => 'file|max:20000|mimes:jpeg,jpg,png,svg',
            'file' => 'file|max:20000|mimes:mpga,wav',
            'lyrics' => 'required',
        ]);

        $music = Music::find($request->id);

        //upload the image
        if($request->album_image) {
            $imageName = 'i'.time().'.'.request()->album_image->getClientOriginalExtension();

            request()->album_image->move(public_path('image/cover'), $imageName);
            $file_path = public_path('/image/cover/'.$music->album_image);
            unlink($file_path);
        } else {
            $imageName = $music->album_image;
        }

        //upload the music
        if($request->file) {
            $musicName = 'm'.time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('mp3'), $musicName);
            $file_path = public_path('/mp3/'.$music->file);
            unlink($file_path);
        } else {
            $musicName = $music->file;
        }
        
        $music->title = $request->title;
        $music->artist = $request->artist;
        $music->album_name = $request->album;
        $music->lyrics = $request->lyrics;

        $music->album_image = $imageName;
        $music->file = $musicName;

        $music->save();
        //dd($request->title);
        return redirect('musics/'. $request->id);
        //return view('music/view', compact("music"));
    }

    public function deleteMusic(Request $request)
    {
        
        $music = Music::find($request->id);
        
        $imageFile = public_path('image/cover/' . $music->album_image );
        $musicFile = public_path('mp3/' . $music->file );

        unlink($imageFile);
        unlink($musicFile);

        music_playlist::where('music_id', $request->id)->delete();

        Music::find($request->id)->delete();
        return 'success';
    }

}
