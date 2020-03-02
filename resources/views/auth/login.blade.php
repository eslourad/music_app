@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row main-container">
        <div class="col-md-6 image-col">
            <img src="{{URL::asset('/image/landing.png')}}" alt="landing_page" class="landing-img">
        </div>
        <div class="col-md-6 login-col pt-5">
            <div class=" mt-5">

                <div class="text-white">
                    <h1 class="home-header">Feel the Music</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class=" btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <!-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="home-circle-1"></div>
        <div class="home-circle-2"></div>
        <div class="home-circle-3"></div>
    </div>
</div>
<style>
    @media only screen and (max-width: 759px) {
        .image-col {
            display:none;
        }
    }
    @media only screen and (min-width: 760px) {
        .image-col {
            display:block;
            z-index: 2;
        }
    }
    .landing-img {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 80%;
    }
    .main-container {
        height: 100vh;
    }
    body {
        overflow-y: hidden;
    }
    .login-col {
        z-index: 1;
    }
    .overide-card {
        background-color: #CFD8DC;
    }
    .home-circle-1 {
        border-radius: 50%;
        position: absolute;
        width: 15vw;
        height: 15vw;
        background-color: rgba(188, 58, 128, .1);
        bottom: 5vw;
        left:5vw;
    }
    .home-circle-2 {
        border-radius: 50%;
        position: absolute;
        width: 15vw;
        height: 15vw;
        background-color: rgba(52, 87, 178, .1);
        top: 15vw;
        left: 30vw;
    }
    .home-circle-3 {
        border-radius: 50%;
        position: absolute;
        width: 15vw;
        height: 15vw;
        background-color: rgba(52, 87, 178, .1);
        bottom: 15vw;
        right: 30vw;
    }
    .home-header {
        font-size: 5em;
    }
</style>
@endsection
