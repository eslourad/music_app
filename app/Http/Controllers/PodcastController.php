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
        $podcast = podcast::paginate(8);
        return view('podcast/view')
            ->with('podcast', $podcast)
            ->with('keyword', '')
            ->with('isSearching', false)
            ->with('category', 'title')
            ;
    }

    public function searchPodcast(Request $request)
    {
        //dd($request);
        switch ($request->category) {
            case 'title':
                $podcast = podcast::where('title', 'like', '%' . $request->keyword . '%')->paginate(8);
                break;
            default:
                $podcast = podcast::where('host', 'like', '%' . $request->keyword . '%')->paginate(8);
        }
        return view('podcast/view')
        ->with('keyword', $request->keyword)
        ->with('category', $request->category)
        ->with('isSearching', true)
        ->with('podcast', $podcast);
    }

    public function pc($id)
    {
        $podcast = podcast::where('id', $id)
             ->first();
        return view('podcast/play')
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
        $imageName = 'i'.time().'.'.request()->thumbnail->getClientOriginalExtension();

        request()->thumbnail->move(public_path('image/podcast'), $imageName);

        //upload the music
        $musicName = 'm'.time().'.'.request()->file->getClientOriginalExtension();

        request()->file->move(public_path('mp3/podcast'), $musicName);

        $podcast = new podcast;
        $podcast->title = $request->title;
        $podcast->host = $request->host;
        $podcast->thumbnail = $imageName;
        $podcast->file = $musicName;
        $podcast->description = $request->description;
        $podcast->save();

        if($podcast) {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Podcast added successfully!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Something went wrong!');
        }

        return redirect('podcast/add');
    }

    public function edit($id)
    {
        $podcast = podcast::where('id', $id)
             ->first();
        return view('podcast/edit')
            ->with('podcast', $podcast);
    }
    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'host' => 'required|max:255',
            'thumbnail' => 'file|max:20000|mimes:jpeg,jpg,png,svg',
            'file' => 'file|mimes:mpga,wav',
            'description' => 'required',
        ]);

        $podcast = podcast::find($request->id);
        //upload the image
        if($request->thumbnail) {
            $imageName = 'i'.time().'.'.request()->thumbnail->getClientOriginalExtension();

            request()->thumbnail->move(public_path('image/podcast'), $imageName);
            $file_path = public_path('image/podcast/'.$podcast->thumbnail);
            unlink($file_path);
        } else {
            $imageName = $podcast->thumbnail;
        }

        //upload the music
        if($request->file) {
            $musicName = 'm'.time().'.'.request()->file->getClientOriginalExtension();
            request()->file->move(public_path('mp3/podcast'), $musicName);
            $file_path = public_path('/mp3/podcast/'.$podcast->file);
            unlink($file_path);
        } else {
            $musicName = $podcast->file;
        }

        $podcast->title = $request->title;
        $podcast->host = $request->host;
        $podcast->thumbnail = $imageName;
        $podcast->file = $musicName;
        $podcast->description = $request->description;
        $podcast->save();

        if($podcast) {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Podcast added successfully!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Something went wrong!');
        }

        return redirect('podcast/edit/'. $request->id);
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
