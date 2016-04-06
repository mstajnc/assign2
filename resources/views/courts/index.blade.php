@extends('layouts.app')

@section('content')
	<h3>All courts</h3>
	@foreach($courts as $court)
		<li><a href="/courts/{{ $court->court_id}}">{{$court->court_name}}</a></li>
	@endforeach
@stop