@extends('layout.main')

@section('content')
    <form method="post" action="{{ route('login.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />

        <!-- LOGO -->
        <a href="{{ url('/dashboard') }}" class="logo text-center logo-light">
            <span class="logo-lg">
                <img src="{{ asset('assets/img/logoweb.png') }}" alt="" height="45">
            </span>
            <span class="logo-sm">
                <img src="{{ asset('assets/img/hospital-logo.png') }}" alt="" height="45">
            </span>
        </a>

        <h1 class="h3 mb-3 fw-normal">Login</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username"
                required="required" autofocus>
            <label for="floatingName">Username</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password"
                required="required">
            <label for="floatingPassword">Password</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

        @include('auth.partials.copy')
    </form>
@endsection
