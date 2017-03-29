@extends('layouts.access')

<!-- Main Content -->
@section('content')
    <div class="container" id="login-form">
        <div class="card card-container" style="height: auto">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <h2>Reset Password</h2>
            <br>
            <form class="form-signin" role="form" method="POST" action="{{ url('/password/email') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <input id="email" type="email" placeholder="Email Address" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Send Password Reset Link</button>
            </form>
        </div>
        <h2 class="sign-now">In the wrong place?
            <span><a href="/login" class="no-decoration">Sign In</a></span></h2>
    </div>
@endsection
