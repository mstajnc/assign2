@extends('layouts.app')

@section('panel_heading', 'Create a court')

@section('content')
	@can('create_court')
	<!-- The Current User Can Create A Court -->
	<h3>Create a court</h3>
	 
	<form method="POST" action="/courts/store">
	{{csrf_field()}}
			<div class="form-group{{ $errors->has('court_name') ? ' has-error' : '' }}">
				<div class="form-group">
					<label class="col-md-4 control-label">Court name</label>
					<div class="col-md-6">
                        <input type="text" class="form-control" name="court_name" value="{{old('court_name')}}">

                        @if ($errors->has('court_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('court_name') }}</strong>
                            </span>
                        @endif
                    </div>
				</div>
			</div>

			<div class="form-group{{ $errors->has('surface') ? ' has-error' : '' }}">
				<div class="form-group">
					<label class="col-md-4 control-label">Surface</label>
					<div class="col-md-6">
                        <select  class="form-control" name="surface">
    							<option value="grass">Grass</option>
    							<option value="clay">Clay</option>
    							<option value="hardcourt">Hardcourt</option>
    							<option value="carpet">Carpet</option>
    					</select>
                        @if ($errors->has('surface'))
                            <span class="help-block">
                                <strong>{{ $errors->first('surface') }}</strong>
                            </span>
                        @endif
                    </div>
				</div>
			</div>

			<div class="form-group{{ $errors->has('under_construction') ? ' has-error' : '' }}">
				<div class="form-group">
					<label class="col-md-4 control-label">Under construction</label>
					<div class="col-md-6">
                         <select  class="form-control" name="under_construction">
    							<option value="1">Yes</option>
    							<option value="0">No</option>
    					</select>

                        @if ($errors->has('under_construction'))
                            <span class="help-block">
                                <strong>{{ $errors->first('under_construction') }}</strong>
                            </span>
                        @endif
                    </div>
				</div>
			</div>

			<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Create a court
                                </button>
                            </div>
                        </div>

	</form>
	@if (count($errors))
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	@endif
	
	@else
	<!-- The Current User Cannot Create A Court -->
	<h2>Insufficient permissions.</h2>

	@endcan


@stop