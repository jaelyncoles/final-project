@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Image</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('home') }}">
                        @csrf
                        <input type="file" name="img" accept="image/*">
                        <input type="submit">
                    </form>
                    {{-- route back to home/profile home --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection