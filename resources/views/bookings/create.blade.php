@extends('layouts.app')

@section('panel_heading', 'Book a court')

@section('content')
	<h3>Book a court</h3>
	@if (count($available_courts) > 0)
		@foreach($available_courts as $court)

		<form method="POST" action="/bookings/store">
		{{csrf_field()}}
		<input type="hidden" name="court_id" value="{{$court->court_id}}">
		<table class="table table-striped task-table">
		<thead>
            <th>{{$court->court_name}} ({{$court->surface}})</th>
            <th>&nbsp;</th>
        </thead>
        <tbody>
        	<tr>
        		<td>
        		<div class="form-group{{ $errors->has('booking') ? ' has-error' : '' }}">
					<div class="form-group">
						<label class="col-md-4 control-label">Date and time 'YYYY-MM-DD hh:mm:ss'</label>
						<div class="col-md-6">
	                        <input type="text" class="form-control" name="booking" value="{{old('booking')}}">

	                        @if ($errors->has('booking'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('booking') }}</strong>
	                            </span>
	                        @endif
	                    </div>
					</div>
				</div>
        		</td>
        		<td>
        		<div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
					<div class="form-group">
						<label class="col-md-4 control-label">Notes</label>
						<div class="col-md-6">
	                        <input type="text" class="form-control" name="notes" value="{{old('notes')}}">

	                        @if ($errors->has('notes'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('notes') }}</strong>
	                            </span>
	                        @endif
	                    </div>
					</div>
				</div>
        		</td>

        	</tr>


        </tbody>





		</table>
					<div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-exclamation-triangle"></i>Book a court
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

		@endforeach

	@else 
		<h2>"There are currently no courts to display."</h2>
	    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-user"></i><a href="{{ url('/courts/create') }}">Create a court</a>
        </button>
        </div>
        </div>
    @endif
@stop