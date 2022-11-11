@extends('layouts.first')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <label  class="col-md-6 offset-md-2 fs-1 fw-bold" style="text-align:center;" >¿Tienes problemas para ingresar?</label>
    </div>
    <div class="row justify-content-center mb-3" style="text-align:center;">
        <label  class="col-md-6 offset-md-6 fs-6 ">Introduce tu correo electrónico o cédula y te enviaremos un enlace para que vuelvas a entrar en tu cuenta.</label>
    </div> 
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="text-align:center;">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="row mb-3">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Ingresa un correo electrónico o cédula') }}</label>

                    <div class="col-md-6">
                        <input placeholder="Ingresa un correo electrónico o cédula" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn bg-secondary  text-white">
                            {{ __('Enviar enlace de acceso') }}
                        </button>
                    </div>
                </div>
            </form>
            <div class="container">
                <div class="col-md-6 offset-md-4">
                    <hr class="bg-danger border-2 border-top  bg-dark">
                </div>
                <div class="col-md-6 offset-md-4">
                    <a style="text-decoration:none"  class="text-dark fw-bold" href="{{ route('register') }}">
                            {{ __('Crear una cuenta nueva') }}
                    </a>
                </div>
            <div>
           
        </div>
    </div>
</div>
@endsection
