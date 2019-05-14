@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your Favorites</div>

                    <div class="card-body">
                        <ul>
                            @foreach($favs_checked as $fav)
                            <li>{{ $fav }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- route to user genre form -->
                    <a href="/editgenre"> <button>Edit Favorites</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</ul>
@endsection