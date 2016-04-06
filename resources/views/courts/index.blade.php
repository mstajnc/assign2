@extends('layouts.app')

@section('content')
	<h1>All courts</h1>
	@foreach($courts as $court)
		<li><a href="/courts/{{ $court->court_id}}">{{$court->court_name}}</a></li>
	@endforeach
@stop