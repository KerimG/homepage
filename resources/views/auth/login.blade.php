@extends('layouts.page')

@section('content')
    <div class="container">

        <form role="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <fieldset>
                <legend>Login</legend>

                <div class="form-group {{ $errors->has('email') ? ' form-error' : '' }}">
                    <label for="email">E-Mail Address</label> <br>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
                </div>

                <div class="form-group {{ $errors->has('password') ? ' form-error' : '' }}">
                    <label for="password">Password</label> <br>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>
            </fieldset>
        </form>


    {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
    {{--<label for="email" class="col-md-4 control-label">E-Mail Address</label>--}}
    {{--<input id="email" type="email" class="form-control" name="email"--}}
    {{--@if ($errors->has('email'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}

    {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
    {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

    {{--@if ($errors->has('password'))--}}
    {{--<span class="help-block">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}

    {{--<label>--}}
    {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
    {{--</label>--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
    {{--<div class="col-md-8 col-md-offset-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--Login--}}
    {{--</button>--}}

    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
    {{--Forgot Your Password?--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
@endsection
