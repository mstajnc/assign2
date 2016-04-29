@extends('layouts.app')

@section('panel_heading', 'Welcome')

@section('content')
   <p> You are logged in! </p>
   <p>In total we have <b>{{ $courts }}</b> courts, of which <b>{{ $available_courts }}</b>
   @if($available_courts > 1) 
   		are 
   @else
   		is
   @endif
   		available. 

   		
   <b>{{ $construction }}</b>
   @if($construction > 1)
   		are
   @else 
   		is
   @endif
    currently under construction.</p>

   @piechart('Courts', 'courts-div', true)
@endsection
