@extends('layouts.app')

@section('content')


 <form method="POST" action="{{ route('home') }}"> 
							@csrf 
							
                            
							<genreform-component/>


 </form> 
    
@endsection


