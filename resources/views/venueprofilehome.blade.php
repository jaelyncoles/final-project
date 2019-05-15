@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1> {{ $venues[0]->venuename }}</h1>
                </div>

                <div class="card-body">
                    <div>
                        <div class='row'>
                            {{-- <div class='col'>
                                <div style="border:1px solid #6699cc;" id="profileimg">
                                    <img src="{{$venues[0]->mainimg}}" />

                        </div>



                        {{-- <div id='likebuttoncount'>
                                    {{likecount}} --}}
                        {{-- </div> --}}


                        <div class='col'>
                            <div id='venuedescription'>
                                {{-- // <a href="{{ route('') }}"> --}}
                                <p>{{$venues[0]->description}}</p>
                                {{-- </a> --}}

                                {{-- route to venue description edit blade --}}

                            </div>
                        </div>





                        <div id='city'>
                            {{-- <a href="{{ route('') }}"> --}}
                            <p> {{$userprofile->city}} </p>
                            </a>

                            {{-- add route to edit city blade--}}
                        </div>
                        <br>
                        <div class='col'>
                            <div>

                                <a href="favs">

                                    Favorites

                                    {{-- route to favorites blade --}}
                                </a>
                                {{-- route to favorites blade --}}
                            </div>
                        </div>
                        {{-- </div> --}}
                        <div id='newsfeed'>
                            <h1>Event Feed </h1>
                            <ul style="list-style: none;">
                                @foreach($posts as $post)
                                <li><img src="{{ $post->image }}" /><br>
                                    <h3>{{$post->title}}</h3>
                                    <p>{{$post->description}}<p>
                                </li>
                                @endforeach
                            </ul>

                            <a href="postcreate" id='addpost'> Add Post </a>
                            {{-- route to add post blade --}}

                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>

@endsection