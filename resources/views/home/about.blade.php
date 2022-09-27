@extends('layouts.app')
@section('title', 'Sobre Nosotros')
@section('subtitle','Nuestro equipo')
@section('content')

<div class="container">
    <div class="row">
        <img  class="img-thumbnail" src="{{  asset($viewData['integrantes'])  }}">
    </div>
</div>

@endsection
