@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center mb-5">
        <label  class="col-md-6 offset-md-2 fs-1 fw-bold" style="text-align:center;" >¿De qué forma deseas hacerlo?</label>
    </div>
    <div class="row justify-content-center mb-5" style="text-align:center;">
        <a href="{{ route('aliment.index') }}">
            <button class="btn bg-secondary btn-lg text-white">Preparando tu plato</button>
        </a>
    </div>
    <div class="row justify-content-center mb-5" style="text-align:center;">
        <a href="{{ route('dishHouse.index',['tipo'=> $viewData['tipo']  ])  }}">
            <button class="btn bg-secondary btn-lg text-white">Con recetas estándar</button>
        </a>
    </div> 
</div>

@endsection