@extends('layouts.first')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <label  class="col-md-6 offset-md-2 fs-1 fw-bold" style="text-align:center;" >¡Hola!</label>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row mb-1">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre completo') }}</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-1">
                    <label for="document" class="col-md-4 col-form-label text-md-end">{{ __('Cédula de ciudadanía') }}</label>

                    <div class="col-md-6">
                        <input id="document" type="document" class="form-control @error('document') is-invalid @enderror" name="document" required autocomplete="new-document">

                        @error('document')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                
                <div class="row mb-1">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo electrónico') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-1">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar contraseña') }}</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6 offset-md-4" style="text-align:center;">
                        <button type="submit" class="btn bg-secondary text-white">
                            {{ __('Registrarse') }}
                        </button>
                    </div>
                </div>
                <div class="row mb-0" style="text-align:center;">
            <div class="col-md-8 offset-md-4">
                    <p class="text">
                        ¿Ya tienes una cuenta? <a style="text-decoration:none" class="text-dark fw-bold" href="{{ route('login') }}">Inicia sesión</a>
                    </p>
            </div>
            </form>      
        </div>
    </div>
</div>
@endsection
