@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Venue Description</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('home') }}">
                        @csrf
                        <label for="description">Tell us about your Venue:</label>

                        <textarea id="description" name="description">


                        </textarea>
                        {{-- route back to home/profile home --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection