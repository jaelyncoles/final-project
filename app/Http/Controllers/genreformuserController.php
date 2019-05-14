<?php

namespace App\Http\Controllers;

use App\User;
use App\genreformuser;
use App\userfav;
use Illuminate\Http\Request;
use Auth;
use DB;

class genreformuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;





        $userprofile = User::findOrFail($user_id);

        return view('home', compact('userprofile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
        // get all checked genres from the request
        // loop thru all checked genres
        // create a new userfav for each genre checked
        
        // new userfav
        $userfav = new userfav();
        
        // save the user id
        $user_id = Auth::user()->id;
        $userfav->user_id = $user_id;
        
        // genres
        $userfav->hiphop = 0;
        $userfav->blues = 0;
        $userfav->jazz = 0;
        $userfav->rb = 0;
        $userfav->techno = 0;
        $userfav->country = 0;
        $userfav->poetry = 0;
        $userfav->karaoke = 0;
        $userfav->rock = 0;
        $userfav->burlesque = 0;
        $userfav->live = 0;
        $userfav->local = 0;
        $userfav->revues = 0;
        $userfav->cover = 0;
        $userfav->funk = 0;
        $userfav->latin = 0;
        $userfav->dubstep = 0;

        $input = $request->all();
        foreach ($input as $key => $value) {
            if ($key != "_token") {
                $userfav->{$key} = 1;
            }
        }

        // save userfav
        $userfav->save();

        // ************* //
        // *** mySQL *** //
        // ** queries ** //
        // ************* //
        
        // get the user favorites
        $user_favorites= DB::select("SELECT * FROM userfavs
                                WHERE user_id = :user_id
                             ORDER BY id
                                DESC LIMIT 1", array('user_id' => $user_id))[0];

        // get the venues and each venues favorites as an array of arrays of objects
        $venues_favorites= DB::select('SELECT * FROM userfavs
                            LEFT OUTER JOIN users
                            ON users.id = userfavs.user_id
                                WHERE users.venue = 1');

        $all_posts = array();
        foreach ($venues_favorites as $venue_favorites) {
            $arr_vfavs= get_object_vars($venue_favorites);
            $arr_ufavs= get_object_vars($user_favorites);
            foreach ($arr_vfavs as $key => $value) {
                if ($key == "id" ||
                    $key == "user_id" ||
                    $key == "username" ||
                    $key == "email" ||
                    $key == "email_verified_at" ||
                    $key == "password" ||
                    $key == "password_verified_at" ||
                    $key == "approved" ||
                    $key == "remember_token" ||
                    $key == "created_at" ||
                    $key == "updated_at" ||
                    $key == "city" ||
                    $key == "venue" ||
                    $key == "admin" ||
                    $key == "approved_at" ||




                    $key == "genre_id") {
                    continue;
                }
                //echo($key);
                    
                if ($arr_vfavs[$key]==$arr_ufavs[$key] &&
                $arr_vfavs[$key] == 1) {
                    array_push($all_posts, DB::select('SELECT * FROM venueposts WHERE user_id = :user_id', array('user_id'=>$arr_vfavs['id'])));
                    break;
                }
            }
        }
            
        //get the venues compact to return
        $venues= DB::select('select * from venues where user_id = :user_id', array('user_id' => $user_id));
        
        // get the posts compact to return
        $posts = DB::select('select * from venueposts where user_id = :user_id', array('user_id' => $user_id));
            
        //get the userprofile compact to return
        $userprofile = User::findOrFail($user_id);

        if (Auth::user()->venue == 1) {
            return view('venueprofilehome', compact('venues', 'userprofile', 'posts'));
        }
        return view('home', compact('userprofile', 'all_posts'));
    }
        
        
        
        
        
    /**
     * Display the specified resource.
     *
     * @param  \App\genreformuser  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(genreformuser $genreformuser)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\genreformuser  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(genreformuser $genreformuser)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\genreformuser  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, genreformuser $genreformuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\genreformuser  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(genreformuser $genreformuser)
    {
        //
    }
    public function editgenre()
    {
        return view('genreformuser');
    }
}
