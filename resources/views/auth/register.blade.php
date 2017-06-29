@extends('layouts.page')

@section('content')
    <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' form-error' : '' }}">
                <label for="name">Name</label>

                <div>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' form-error' : '' }}">
                <label for="email">E-Mail Address</label>

                <div>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' form-error' : '' }}">
                <label for="password">Password</label>

                <div>
                    <input id="password" type="password" name="password" required>
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <button type="submit">
                        Register
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
