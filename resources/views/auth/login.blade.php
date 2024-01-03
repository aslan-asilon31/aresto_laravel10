@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-12 ">
                            Login with other social medias <br>
                            <a href="/auth/google" class="">
                                <img style="width:50px;height:50px;" src="{{ asset('3d-icon/3d-icon-gmail.png') }}" alt="">
                            </a>
                            <a href="/auth/github" class="">
                                <img style="width:40px;height:40px;" src="{{ asset('3d-icon/3d-icon-github.png') }}" alt="">
                            </a>
                            <a href="/auth/facebook" class="">
                                <img style="width:50px;height:50px;" src="{{ asset('3d-icon/3d-icon-facebook.png') }}" alt="">
                            </a>
                            <a href="/auth/twitter" class="">
                                <img style="width:60px;height:60px;" src="{{ asset('3d-icon/3d-icon-twitter.png') }}" alt="">
                            </a>
                            <a href="/auth/discord" class="">
                                <img style="width:50px;height:50px;" src="{{ asset('3d-icon/3d-icon-discord.png') }}" alt="">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
