@extends('layouts.app')

@section('content')
    <style>
        body {
            background-image: -webkit-radial-gradient(center, circle cover, );
            background-image: -moz-radial-gradient(center, circle cover, #194ddc, #7fa5eb 80%);
            background-image: -o-radial-gradient(center, circle cover, #256da1, #1645bb 80%);
            background-image: radial-gradient(center, circle cover, #3f5b8e, #1c278b 80%);
        }

        #content1 {
            width: 100%;
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            animation: zoom 15s forwards;
        }

        @keyframes zoom {
            0% {
                transform: scale(1, 1);
            }

            50% {
                transform: scale(1.2, 1.2);
            }

            100% {
                transform: scale(1, 1);
            }
        }

        .bg {
            animation: slide 3s ease-in-out infinite alternate;
            background-image: linear-gradient(-60deg, #ffce29 50%, #741299 50%);
            bottom: 0;
            left: -50%;
            opacity: .1;
            position: fixed;
            right: -50%;
            top: 0;
            z-index: -1;
        }

        .bg2 {
            animation-direction: alternate-reverse;
            animation-duration: 4s;
        }

        .bg3 {
            animation-duration: 5s;
        }

        h1 {
            font-family: monospace;
        }

        @keyframes slide {
            0% {
                transform: translateX(-25%);
            }

            100% {
                transform: translateX(25%);
            }
        }

        h3 {
            color: #000000;
        }

        /* input {
              text-align: center;
              } */
        .tbox {
            position: absolute;
            display: none;
            padding: 14px 17px;
            z-index: 900
        }

        .tinner {
            padding: 15px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            background: #fff url(../phpimages/preload.gif) no-repeat 50% 50%;
            border-right: 1px solid #333;
            border-bottom: 1px solid #333
        }

        .tmask {
            position: absolute;
            display: none;
            top: 0px;
            left: 0px;
            height: 100%;
            width: 100%;
            background: #000;
            z-index: 800
        }

        .tclose {
            position: absolute;
            top: 0px;
            right: 0px;
            width: 30px;
            height: 30px;
            cursor: pointer;
            background: url(../phpimages/close.png) no-repeat
        }

        .tclose:hover {
            background-position: 0 -30px
        }
    </style>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

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
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-5 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif

                                    @guest
                                        {{-- @if (Route::has('login'))
                                            <span class="nav-item btn btn-success">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </span>
                                        @endif --}}

                                        @if (Route::has('register'))
                                            <p class="link-underline-primary">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </p>
                                        @endif
                                    @else
                                        <span class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </span>
                                    @endguest
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
