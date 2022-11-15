@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3 text-left">
    <div class="col">
        <div class="row mb-3">
            <div class="col-lg-10 col-md-6 col-sm-12">
                <div class="ratio" style="--bs-aspect-ratio: 90%;">
                    <img src="{{ asset('/storage/'.$viewData['dishHouse']->getImage()) }}" class="displayed ">
                </div>
            </div>
        </div>
    </div>
    <div class="row-md-4">
        <div class="card-body">
            <div class="col">
                <div class="mb-3 row">
                    <div style="text-transform:uppercase;" class="col-lg-10 col-md-6 col-sm-12">
                        <h3>{{ $viewData["dishHouse"]->getName() }}<h3> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="row mb-3">
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h9>{{ $viewData["dishHouse"]->getDescription() }}<h9> 
                    </div>    
                </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Ingredientes </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        @foreach ($viewData["ingredients"] as $ingredients)
                            <p class="fw-normal">{{ $ingredients }}</p>
                        @endforeach 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Instrucciones </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        @foreach ($viewData["instructions"] as $instructions)
                        <p class="fw-normal">{{ $instructions }}</p>
                        @endforeach  
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3>Porción</h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h9></h9>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Recomendación </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        @if ($viewData["dishHouse"]->getHealthyCategory() == '1')
                            <h9>Consumo diaro<h9> 
                        @elseif ($viewData["dishHouse"]->getHealthyCategory() == '2')
                            <h9>Consumo semanal<h9> 
                        @else
                            <h9>Consumo ocasional<h9> 
                        @endif
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Prepara tu plato </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="{{ $viewData["dishHouse"]->getVideo() }}" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> ¿Si lo preparaste? </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <button type="submit" class="btn bg-secondary text-white">Confirmar</button>
                        </div>
                    </div>
                </div>
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3>Otras personas también probaron</h3></label>
                <div class="card-group">
                    <div class="card">
                        <img src="{{ asset('/storage/'.$viewData['recomendation']->getImage()) }}" class="card-img-top img-card">
                        <div class="card-body text-center">
                            <a href="{{ route('dishHouse.show', ['id'=> $viewData["recomendation"]->getId()]) }}" style="text-transform:uppercase;" class="btn bg-primary text">
                            <p class="fs-6 fw-normal">{{ $viewData["recomendation"]->getName() }}</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection