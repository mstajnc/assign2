@extends('layouts.app')

@section('content')
	<h3>All courts</h3>
	<ul class="list-group">
	@foreach($courts as $court)
		<li class="list-group-item"><a href="/courts/{{ $court->court_id}}">{{$court->court_name}} ({{$court->surface}})</a></li>
	@endforeach
	</ul>
@stop