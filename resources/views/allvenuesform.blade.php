@extends('layouts.app')

@section('content')


<form method="POST" action="{{ route('home') }}">
	@csrf


	<venuesform-component />


</form>

@endsection