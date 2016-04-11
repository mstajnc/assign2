@extends('layouts.app')

@section('panel_heading', 'Book a court')

@section('content')
	<h3>Book a court</h3>
	 
	<form method="POST" action="/bookings/store">
	{{csrf_field()}}
			

	</form>
	@if (count($errors))
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif


@stop