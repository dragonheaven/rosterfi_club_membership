@extends('layouts.access')

@section('content')
    <div class="container" id="login-form">
        <div class="card card-container" style="height: auto">
            <h2>Create an account</h2>
            <br>
            <form class="form-signin" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <input type="text" id="" class="form-control{{ $errors->has('first_name') ? ' has-error' : '' }}" name="first_name" placeholder="First Name" value="{{old('first_name')}}">
                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" id="" class="form-control{{ $errors->has('last_name') ? ' has-error' : '' }}" name="last_name" placeholder="Last Name" value="{{old('last_name')}}">
                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" name="email" placeholder="Email address" value="{{old('email')}}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" id="" class="form-control{{ $errors->has('zip') ? ' has-error' : '' }}" name="zip" placeholder="ZIP Code" value="{{old('zip')}}">
                    @if ($errors->has('zip'))
                        <span class="help-block">
                            <strong>{{ $errors->first('zip') }}</strong>
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
                <div class="form-group">
                    <input type="password" id="" class="form-control{{ $errors->has('confirm_password') ? ' has-error' : '' }}" name="password_confirmation" placeholder="Confirm Password">
                    @if ($errors->has('confirm_password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('confirm_password') }}</strong>
                        </span>
                    @endif
                </div>


                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" id="tos-agree" checked="checked"> I agree to the TOS
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" id="submit-btn">Sign Up</button>
            </form>
        </div>
        <h2 class="sign-now">Already have an account?
            <span><a href="/login" class="no-decoration">Sign In</a></span></h2>
    </div>
    <script>
        $(document).ready(function () {
            $('#tos-agree').click(function () {
                if ($(this).prop('checked')) {
                    $('#submit-btn').removeAttr('disabled');
                }
                else {
                    $('#submit-btn').attr('disabled', 'disabled');
                }
            });
        });
    </script>
@endsection
