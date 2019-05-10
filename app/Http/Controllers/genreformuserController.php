<?php

namespace App\Http\Controllers;

use App\genreformuser;
use App\userfav;
use Illuminate\Http\Request;

class genreformuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('genreformuser');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $userfav = new userfav();
        //$userfav->id = $request['id'];
        $userfav->user_id = $request['user_id'];
        $userfav->genre_id = $request['genre_id'];
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
        $userfav = new userfav();
        //$userfav->id = $request['id'];
        $userfav->genre_id = $request['genre_id'];
        $userfav->user_id = $request['user_id'];
        $userfav->save();
        
        return view('home', compact('$request'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\genreformuser  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(genreformuser $genreformuser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\genreformuser  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(genreformuser $genreformuser)
    {
        //
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
}
