@extends('layouts.app')
@section('title', 'Sobre Nosotros')
@section('subtitle','Nuestro equipo')
@section('content')

<div class="container">
    <div class="row">
    @foreach ($viewData['integrantes'] as $integrante)
        <div class="col">
            <img    class="img-thumbnail" src="{{  asset($integrante['src'])  }}" id="imagenPrinc">
            <h5 class="card-title text-center">{{ $integrante['name'] }}</h5>
        </div>
        @endforeach
    </div>
</div>

@endsection