@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center mb-5">
        <label  class="col-md-6 offset-md-2 fs-1 fw-bold" style="text-align:center;" >¿En qué parte del día te encuentras?</label>
    </div>
    <div class="row justify-content-center mb-5" style="text-align:center;">
        <a href="{{ route('home.type',['tipo'=> 'Desayuno']) }}">
            <button class="btn bg-secondary btn-lg text-white">Desayuno</button>
        </a>
    </div>
    <div class="row justify-content-center mb-5" style="text-align:center;">
        <a href="{{ route('home.type',['tipo'=> 'Almuerzo']) }}">
            <button class="btn bg-secondary btn-lg text-white">Almuerzo</button>
        </a>
    </div>
    <div class="row justify-content-center mb-5" style="text-align:center;">
        <a href="{{ route('home.type',['tipo'=> 'Cena']) }}">
            <button class="btn bg-secondary btn-lg text-white">Cena</button>
        </a>
     </div>  
</div>

@endsection