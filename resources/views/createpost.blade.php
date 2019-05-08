@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>


                <div class="card-body">
                    <form method="POST" action="{{ route('home') }}">
                        <div id='postimage'>
                            @csrf
                            <form>
                                <input type="file" name="img" accept="image/*">
                                <input type="submit">
                            </form>
                        </div>

                        <div id='postdescription'>
                            <label for="description">Tell us about your Event:</label>

                            <textarea id="description" name="description">


                        </textarea>
                        </div>
                        {{-- route back to home/profile home --}}
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection