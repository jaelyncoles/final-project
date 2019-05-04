<?php

namespace App\Http\Controllers;

use App\userfav;
use Illuminate\Http\Request;

class uesrfavcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\userfav  $userfav
     * @return \Illuminate\Http\Response
     */
    public function show(userfav $userfav)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\userfav  $userfav
     * @return \Illuminate\Http\Response
     */
    public function edit(userfav $userfav)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\userfav  $userfav
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userfav $userfav)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\userfav  $userfav
     * @return \Illuminate\Http\Response
     */
    public function destroy(userfav $userfav)
    {
        //
    }

    public function favs(){
        $favs= userfav::all();
    }
}
