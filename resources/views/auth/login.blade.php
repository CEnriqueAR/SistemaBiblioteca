@extends('layouts.auth-master')

@section('content')
    <form  class="card card-md" method="post" action="{{ route('login.perform') }}">
        <div class="card-body">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="static/logo.svg" height="36" alt=""></a>
            </div>
        <h1 class="h3 mb-3 fw-normal">Login</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username" required="required" autofocus>
            <label for="floatingName">Email or Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif

        </div>

            <label class="form-label">
                <span class="form-label-description">
                  <a href="./forgot-password.html">I forgot password</a>
                </span>
            </label>
            <div class="mb-2">
                <label class="form-check">
                    <input type="checkbox" class="form-check-input"/>
                    <span class="form-check-label">Remember me on this device</span>
                </label>
            </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

        @include('auth.partials.copy')
        </div>
    </form>

    <div class="text-center text-muted mt-3">
        Don't have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
    </div>
@endsection
