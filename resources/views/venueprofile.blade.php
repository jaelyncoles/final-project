@extends('layouts.app')

@section('content')
<?php
    //dd($userprofile);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ $venueprofile->venueName }}</div>

                <div class="card-body">
                    <div>
                        <div class='row'>
                            <div class='col-4-md'>
                                <div id="profileimg">
                                    #
                                </div>
                                <div id='likebutton'>
                                    <button> <img src='/images/heart.png' /></button>
                                </div>
                                <div id='venuedescription'>
                                    <p>#</p>
                                </div>
                                <div id='venuegenrelist'>
                                    <ul>
                                        <li v-for="user.fav in user.favs" v-bind:key="user.favs">
                                    </ul>
                                </div>


                                <p> {{$userprofile->city}} </p>
                                <div id='newsfeed' class='col-8-md'>
                                    <h1> Event Feed </h1>
                                    <ul>
                                        <li v-for="post in venuePosts" :key="post"> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection