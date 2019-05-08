@extends('layouts.app')

@section('content')
<?php
    //dd($userprofile);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ $userprofile->username }}</div>

                <div class="card-body">
                    <div>
                        <div class='row'>
                            <div class='col-4-md'>
                                <button v-on:click="">Favorites</button>
                                {{-- route to favorites blade --}}

                                <br>
                                <div id='city'>
                                    <a href="">
                                        <p> {{$userprofile->city}} </p>
                                    </a>
                                    {{-- route to update city blade --}}
                                </div>
                            </div>

                            <div id='newsfeed' class='col-8-md'>
                                <h1>Event Feed</h1>
                                <ul>
                                    <li v-for="post in venuePosts" :key="post" id='newsFeed'> </li>
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