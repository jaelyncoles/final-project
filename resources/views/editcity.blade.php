@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit City</div>
                <form method="POST" action="{{ route('home') }}">
                    @csrf
                    <div class="card-body">
                        <label for="city">Enter your City:</label>

                        <input type="text" id="city" name="city" required>
                        {{-- route back to home/profile home --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection