@extends('layouts.app')

@section('panel_heading', 'Registration')

@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {!! csrf_field() !!}

        <div class="form-group{{ $errors->has('login') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Login</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="login" value="{{ old('login') }}">

                @if ($errors->has('login'))
                    <span class="help-block">
                        <strong>{{ $errors->first('login') }}</strong>
                    </span>
                @endif
            </div>
        </div>
       
        <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">First name</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="fname" value="{{ old('fname') }}">

                @if ($errors->has('fname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('fname') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Surname</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="surname" value="{{ old('surname') }}">

                @if ($errors->has('surname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('surname') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Phone number</label>

            <div class="col-md-6">
                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                @if ($errors->has('phone'))
                    <span class="help-block">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                <input type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label class="col-md-4 control-label">Confirm Password</label>

            <div class="col-md-6">
                <input type="password" class="form-control" name="password_confirmation">

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-btn fa-user"></i>Register
                </button>
            </div>
        </div>
    </form>
@endsection
