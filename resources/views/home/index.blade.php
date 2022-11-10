@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <img  class="col-md-6 offset-md-2 fs-4" src="{{  url('/img/avatar.png')  }}" style="text-align:center;" >
    </div>
    <div class="row justify-content-center">
        <label  class="col-md-6 offset-md-2 fs-4" style="text-align:center;" >Bienvenido</label>
    </div>
    <div class="row justify-content-center">
        <label  class="col-md-6 offset-md-2 fs-3 fw-bold" style="text-align:center;" >{{ Auth::user()->getName() }}</label>
    </div>
    <div class="row justify-content-center mb-3" style="text-align:center;">
        <label  class="col-md-6 offset-md-6 fs-4">¿Qué deseas hacer en este momento?</label>
    </div> 
</div>
@endsection