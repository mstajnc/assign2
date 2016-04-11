@extends('layouts.app')

@section('panel_heading', 'Welcome!')

@section('content')
    Welcome to my Tennis court application's landing page.

    @can('create_court')
    	<h1>testing can</h1>
    @endcan
@endsection
