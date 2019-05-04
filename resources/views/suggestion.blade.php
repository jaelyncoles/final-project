@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Suggestions') }}</div>

                <div class="card-body">
                    
               <suggestion-component/>
             </div>
            </div>
        </div>
    </div>
</div>
@endsection




    



