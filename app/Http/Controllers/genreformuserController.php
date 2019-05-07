<?php

namespace App\Http\Controllers;

use App\genreformuser;
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
    public function create()
    {
        
            
            
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userfav = userfav::store([
            'id' => $data['id'],
            'userid' => $data['userid'],
            'genreid' => $data['genreid']
        ]);
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
