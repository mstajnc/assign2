@extends('layouts.app')

@section('panel_heading', 'Welcome')

@section('content')
   <p> You are logged in! </p>
   <p>In total we have <b>{{ $courts }}</b> courts, of which <b>{{ $available_courts }}</b> are available. <b>{{ $construction }}</b> are currently under construction.</p>
   @piechart('Courts', 'courts-div', true)
@endsection
