@extends('layouts.app')
@section('title', 'Sobre Nosotros')
@section('subtitle','Nuestro equipo')
@section('content')

<div class="container">
    <img scr="{{$viewData['integrantes']}}">
</div>

@endsection
