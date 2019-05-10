<?php

namespace App\Http\Controllers;

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
        $userfav = new userfav();
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
        $favs= userfav::all();

        return view('favorites', compact('$favs)'));
    }
}
