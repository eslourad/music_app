<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Music;

class HomeController extends Controller
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
    public function index()
    {
        $user = auth()->user()->id;
        $musics = Music::paginate(12);
        return view('home')
            ->with('musics', $musics)
            ->with('user', $user)
            ->with('isSearching', false)
            ->with('keyword', '')
            ->with('category', 'title');
        //dd($payload);
    }
}
