<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\userfav;

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
        $uid = Auth::id();
        $userprofile = User::findOrFail($uid);

        //dd($userprofile);

        if ($userprofile->venue) {
            return view('venueregistercont');
        } else {
            return view('genreformuser');
        }

        return view('home', compact('userprofile'));
    }

    public function approval()
    {
        return view('approval');
    }

    /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
    public function store(Request $request)
    {
        //dd($request);
        // save the items in the database
        $userfav = new userfav();
        //$userfav->id = $request['id'];
        $userfav->user_id = $request['user_id'];
        $userfav->genre_id = $request['genre_id'];
        $userfav->save();

        return view('home', compact('$request'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function anon()
    {
        if (Auth::user()->venue) {
            return view('venueregistercont');
        } else {
            return view('genreformuser');
        }
    }
}
