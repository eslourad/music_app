<?php

namespace App\Http\Controllers;

use App\playlist;
use App\User;
use Illuminate\Http\Request;
use App\Music;
use Auth;

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
        $playlist = playlist::where('user_id', $user)
            ->get();
        return view('home')
            ->with('musics', $musics)
            ->with('user', $user)
            ->with('isSearching', false)
            ->with('keyword', '')
            ->with('category', 'title')
            ->with('playlist', $playlist);
        //dd($payload);
    }

    public function subscribe()
    {
        $userId = auth()->user()->id;
        $user = User::find($userId);
        return view('subscribe')
        ->with('user', $user);
    }

    public function usersList()
    {
        $users = User::paginate(10);
        return view('users')
        ->with('keyword', '')
        ->with('category', 'first_name')
        ->with('users', $users);
    }
    public function promotePremium(Request $request)
    {
        $user = User::find($request->id);
        $user->is_premium = 1;
        $user->save();
        return 'success';
    }
    
    public function promoteAdmin(Request $request)
    {
        $user = User::find($request->id);
        $user->is_admin = 1;
        $user->save();
        return 'success';
    }

    public function searchUser(Request $request)
    {
        //dd($request);
        switch ($request->category) {
            case 'first_name':
                $users = User::where('first_name', 'like', '%' . $request->keyword . '%')->paginate(10);
                break;
            case 'last_name':
                $users = User::where('last_name', 'like', '%' . $request->keyword . '%')->paginate(10);
                break;
            default:
                $users = User::where('email', 'like', '%' . $request->keyword . '%')->paginate(10);
        }
        return view('users')
        ->with('keyword', $request->keyword)
        ->with('category', $request->category)
        ->with('users', $users);
    }

    public function settings()
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        return view('settings')
        ->with('user', $user);

    }

    public function userUpdate(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
        ]);

        $user = User::find($request->id);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->birth_date = $request->birth_date;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->name = $request->first_name . ' ' . $request->last_name;
        $user->save();
        
        if($user) {
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Profile updated successfully!');
        } else {
            $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content', 'Error!');
        }
        

        return redirect('settings');
    }

    public function updatePassword()
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        return view('password')
        ->with('user', $user);

    }
    

    public function changePassword(Request $request){

        $this->validate($request, [
            'old_password'     => 'required',
            'new_password'     => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        $data = $request->all();

        if(!\Hash::check($data['old_password'], auth()->user()->password)){
             $request->session()->flash('message.level', 'danger');
             $request->session()->flash('message.content', 'You have entered wrong password');
        }else{

           //Change Password
            $user = Auth::user();
            $user->password = bcrypt($request->get('new_password'));
            $user->save();

            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content', 'Profile updated successfully!');

        }

        return redirect('updatepassword');

    }
    
}
