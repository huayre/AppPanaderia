@extends('layouts.app')
@section('title','Login')
@section('content')
    <div class="container">
        <div class="row justify-content-center " style="padding-top: 120px">
            <div class="card col-10 col-sm-10 col-md-6 col-lg-4 shadow ">
                <div class="card-body px-0 ">
                    <div class="row">
                        <img class="mx-auto mb-2" src="{{asset('images/empresa/logo.jpeg')}} "width="200" height="180">
                    </div>
                    <h4 class="text-center">Iniciar Sesión</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mt-4 mt-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Contraseña">
                                </div>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                        </div>
                        <div class="form-group mt-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>

                        {{--<div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>--}}

                        <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Ingresar') }}
                                </button>

                              {{--  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

