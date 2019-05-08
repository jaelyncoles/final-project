@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Suggestions') }}</div>

                <div class="card-body">
                    <ul>
                        <li v-for="user.suggestion in user.suggestions" v-bind:key="user.suggestion">
                            <suggestion-component />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection