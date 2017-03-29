@extends('layouts.access')

@section('content')
    <div class="container" id="login-form">
        <div class="card card-container" style="height: auto">
            <h2>Sign in to your account</h2>
            <br>
            <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" name="email" placeholder="Email address" autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
                <hr class="separator-login">
                <a href="{{ url('/password/reset') }}">Forgot your password?</a>
            </form>
        </div>
        <h2 class="sign-now">Don’t have an account yet?
            <span><a href="/register" class="no-decoration">Sign Up</a></span></h2>
    </div>
@endsection
