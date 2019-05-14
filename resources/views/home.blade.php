@extends('layouts.app')

@section('content')
<?php
//dd($all_posts);
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

                                <a href="favs">
                                    <button> Favorites</button>
                                    {{-- route to favorites blade --}}
                                </a>

                                <br>
                                <div id='city'>

                                    <h5> {{ $userprofile->city }} </h5>

                                    {{-- route to update city blade --}}
                                </div>
                            </div>

                            <div id='suggested' style="border:1px solid #6699cc;" class='col-8-md'>
                                <h1>Suggested Events</h1>
                                <ul style="list-style: none;">
                                    @foreach($all_posts as $index=>$post)
                                    @foreach($post as $key => $value)
                                    <li><img src="{{ $value->image }}" /><br>
                                        <h1>{{$value->title}}</h1>
                                        {{$value->description}}
                                    </li>
                                    @endforeach
                                    @endforeach

                                </ul>


                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection