<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\userfav;
use DB;

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
        // get the current user's id
        $user_id = Auth::user()->id;
        $userprofile = User::findOrFail($user_id);
        $venues= User::where('venue', 1);
        $all_genres= DB::select('select * from userfavs where user_id = :user_id ORDER BY id DESC LIMIT 1', array('user_id' => $user_id));


        if ($userprofile->venue) {
            return view('venueregistercont');
        } elseif (sizeOf($all_genres)!==0) {
            return view('home', compact($userprofile));
        }

        return view('genreformuser');
    }

    // public function gohome()
    // {
    //     return view('userprofile');
    // }

    /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function anon()
    {
        $userprofile = User::findOrFail($user_id);

        if (Auth::user()->venue) {
            return view('venueregistercont');
        } else {
            return view('genreformuser');
        }
    }
}
