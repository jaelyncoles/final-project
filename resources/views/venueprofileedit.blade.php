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
                <button id='updatecity'> Update </button>
                </div>
                <div id='likebutton'>
                    <button> <img src='/images/heart.png'/></button>
                </div>
              <div id='venuedescription'>
                <p>#</p>
                <button id='updatecity'> Update </button>
              </div>
              <div id='venuegenrelist'>
              <ul>
              <li><li>
              </ul>
              <button id='updatecity'> Update </button>
              </div>
              
              <div id='city'>
            <p> {{$userprofile->city}} </p>
            <button id='updatecity'> Update </button>
            </div>
            <div id='newsfeed' class='col-8-md'>
                <venueprofile-component/>

                <button id='updatecity'> Add Post </button>
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
 