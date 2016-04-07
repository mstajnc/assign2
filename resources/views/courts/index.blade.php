@extends('layouts.app')

@section('panel_heading', 'List of all courts')

@section('content')
	<table class="table table-striped task-table">
        @if (count($courts) > 0)
        <!-- Table Headings -->
        <thead>
            <th>All courts</th>
            <th>&nbsp;</th>
        </thead>

        <!-- Table Body -->
        <tbody>
        
            @foreach($courts as $court)
                <tr>
                    <!-- Task Name -->
                    <td class="table-text">
                        <div><a href="/courts/{{ $court->court_id}}">{{$court->court_name}} ({{$court->surface}})</a></div>
                    </td>                            
                        <!-- Delete Button -->
                        <td>
                            <form action="/courts/{{ $court->court_id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <div class="form-group">
	                            <div class="col-md-6 col-md-offset-4">
	                                <button type="submit" class="btn btn-primary">
	                                    <i class="fa fa-btn fa-exclamation-triangle"></i>Delete court
	                                </button>
		                            </div>
		                        </div>
                            </form>
                        </td>                                                           
                </tr>
            @endforeach
        @else <h2>"There are currently no courts to display."</h2>
        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
	        <button type="submit" class="btn btn-primary">
	            <i class="fa fa-btn fa-user"></i><a href="{{ url('/courts/create') }}">Create a court</a>
	        </button>
	        </div>
            </div>
        @endif
        </tbody>
    </table>
@stop