@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register as Venue') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="username"
                                class="col-md-4 col-form-label text-md-right">{{ __('Venue Name') }}</label>

                            <div class="col-md-6">
                                <input id="venuename" type="text" class="form-control " name="venuename"
                                    value="{{ old('venuename') }}" placeholder=" " autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="venuedescription"
                                class="col-md-4 col-form-label text-md-right">{{ __('Venue Description') }}</label>

                            <div class="col-md-6">
                                <input id="venuedescription" type="text" class="form-control " name="venuedescription"
                                    value="{{ old('venuedescription') }}"
                                    placeholder="Hours of Operation, DressCode Information about your venue" autofocus>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection