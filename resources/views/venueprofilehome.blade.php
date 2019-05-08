@extends('layouts.app')

@section('content')
<?php
    //dd($venueprofile);
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
                                    <a href=""> <img src="" /><a>

                                            {{-- route to editimage blade --}}

                                </div>
                                <div id='favorites'>
                                    <button v-on:click="">Favorites</button>
                                    {{-- route to favorites blade --}}
                                </div>

                                <div id='likebuttoncount'>
                                    {{likecount}}
                                </div>
                                <div id='venuedescription'>
                                    <a href="">
                                        <p>#</p>
                                    </a>

                                    {{-- route to venue description edit blade --}}

                                </div>
                            </div>
                        </div>
                    </div>
                    <div id='venuegenrelist'>
                        <ul>
                            <li>
                            <li>
                        </ul>
                        <button id='updategenre'> Update </button>
                        {{-- add route to genreuserform --}}

                    </div>

                    <div id='city'>
                        <a href="">
                            <p> {{$userprofile->city}} </p>
                        </a>

                        {{-- add route to edit city blade--}}
                    </div>
                    <div id='newsfeed' class='col-8-md'>
                        <h1>Event Feed <h1>
                                <ul>
                                    <li v-for="post in venuePosts" :key="post"> </li>
                                </ul>

                                <button id='addpost'> Add Post </button>
                                {{-- route to add post blade --}}


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