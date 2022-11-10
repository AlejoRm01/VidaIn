@extends('layouts.first')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <label  class="col-md-6 offset-md-2 fs-1 fw-bold" style="text-align:center;" >¡Hola!</label>
    </div>
    <div class="row justify-content-center mb-3" style="text-align:center;">
        <label  class="col-md-6 offset-md-6 fs-3 fw-bold">Ingresa tu cuenta</label>
    </div> 
</div>
<div class="container">
    <form method="POST" action="{{ route('login') }}">
    @csrf
        <div class="row mb-1">
            <label for="email" class="col-md-4 col-form-label text-md-end" style="text-align:center;">Correo electrónico</label>
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
            <label for="password" class="col-md-4 col-form-label text-md-end" style="text-align:center;">{{ __('Contraseña') }}</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3" style="text-align:center;">
            <div class="col-md-6 offset-md-2">
                <div class="form-group">
                    <input class="form-check-input" type="radio" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        Recordar mis datos
                    </label>
                </div>
            </div>
            <div class="col-md-6 offset-md-2">
            @if (Route::has('password.request'))
                <a style="text-decoration:none" class="text-dark fw-bold" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tú contraseña?') }}
                </a>
                @endif
            </div>
        </div>
        <div class="row mb-3" style="text-align:center;">
            <div class="col-md-6 offset-md-6">
                <button  type="sumbit" class="btn btn-primary bg-secondary  btn-secondary btn-lg text-white" href="{{ route('aliment.index') }}">
                    {{ __('Ingresar') }}
                </button >      
            </div>
        </div>
        <div class="row mb-0" style="text-align:center;">
            <div class="col-md-8 offset-md-4">
                @if(Route::has('register')) 
                    <p class="text">
                        ¿No tienes una cuenta? <a style="text-decoration:none" class="text-dark fw-bold" href="{{ route('register') }}">Regístrate</a>
                    </p>
                @endif
            </div>
        </div>
    </form>  
</div>
@endsection