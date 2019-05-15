@extends('layouts.app')

@section('content')
<?php
//dd($all_posts);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @isset($userprofile)
                    <h1>{{ $userprofile->username }}</h1>
                    @endisset
                </div>

                <div class="card-body">
                    <div>
                        <div class='row'>
                            <div class='col'>

                                <a href="favs">
                                    <button> Favorites</button>
                                    {{-- route to favorites blade --}}
                                </a>
                            </div>

                            {{-- <div class='col' id='city'> --}}

                            {{-- <h5> {{ $userprofile->city }} </h5> --}}

                            {{-- route to update city blade --}}
                            {{-- </div> --}}
                        </div>
                        @isset($all_posts)
                        <div id='suggested'>
                            <h1>Suggested Events</h1>
                            <br>
                            <br>
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
                        @endisset



                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection