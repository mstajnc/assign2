@extends('layouts.app')

@section('panel_heading', 'Update'.' '.$court->court_name)

@section('content')
	@can('update_court')
	<!-- The Current User Can Update A Court -->
	<h3>Update court details</h3>

	<form method="POST" action="/courts/{{$court->court_id}}">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	{{method_field('PATCH')}}
				<div class="form-group">
					<textarea name="court_name" class="form-control">{{$court->court_name}}</textarea>
				</div>
				<div class="form-group">
					<textarea name="surface" class="form-control">{{$court->surface}}</textarea>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Update court</button>
				</div>

			</form>


	@else
	<!-- The Current User Cannot Update A Court -->
	<h2>Insufficient permissions.</h2>

	@endcan
@stop