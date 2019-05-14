<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\userfav;
use Illuminate\Http\Request;

class userfavsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $userprofile = User::findOrFail($user_id);

        $userfav = new userfav();
        
        //$userfav->id = $request['id'];
        $userfav->genre_id = $request['genre_id'];
        $userfav->user_id = $request['user_id'];
        $userfav->save();
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $userprofile = User::findOrFail($user_id);

        $userfav = new userfav();
        // dd($request);
        //$userfav->id = $request['id'];
        $userfav->genre_id = $request['genre_id'];
        $userfav->user_id = $request['user_id'];
        $userfav->save();
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\userfavs  $userfav
     * @return \Illuminate\Http\Response
     */
    public function show(userfavs $userfavs)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\userfavs  $userfavs
     * @return \Illuminate\Http\Response
     */
    public function edit(userfavs $userfavs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\userfavs  $userfav
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userfavs $userfavs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\userfavs  $userfav
     * @return \Illuminate\Http\Response
     */
    public function destroy(userfavs $userfavs)
    {
        //
    }

    public function favs()
    {
        // get current auth user
        // $userfavid =
        $user_id = Auth::user()->id;
        $all_genres= DB::select('select * from userfavs where user_id = :user_id ORDER BY id DESC LIMIT 1', array('user_id' => $user_id))[0];
        // dd($all_genres);
        
        $favs_checked = array();
        // $all_genres = (array)$favs[0];
        foreach ($all_genres as $genretype => $checked) {
            if ($checked == 1 && $genretype !='id') {
                //dd($checked);
                array_push($favs_checked, $genretype);
            }
        }
        //dd($favs_checked);
        
        
        return view('favorites', compact('favs_checked'));
    }
}
