@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('Suggestions') }}</div> --}}

            <div class="card-body">
                <ul>
                    {{-- for each venuespost in all posts
                        for each post in venuespost
                        print description  --}}
                    <li>{{$all_posts[0][0]->description}}</li>

                </ul>
            </div>
        </div>
    </div>
</div>
</div>
@endsection