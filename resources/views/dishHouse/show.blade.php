@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3 text-left">
    <div class="ratio ratio-16x9">
        <img src="{{ asset('/storage/'.$viewData['dishHouse']->getImage()) }}" class="displayed ">
    </div>
    <div class="row-md-4">
        <div class="card-body">
            <div class="col">
                <div class="mb-3 row">
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h3>{{ $viewData["dishHouse"]->getName() }}<h3> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="row mb-3">
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["dishHouse"]->getDescription() }}<h5> 
                    </div>    
                </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Ingredientes </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        @foreach ($viewData["ingredients"] as $ingredients)
                            <h5>{{ $ingredients }}<h5>
                        @endforeach 
                    </div>    
                </div>
            </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Instrucciones </h3></label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            @foreach ($viewData["instructions"] as $instructions)
                                <h5>{{ $instructions }}<h5>
                            @endforeach  
                        </div>    
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Recomendación </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        @if ($viewData["dishHouse"]->getHealthyCategory() == '1')
                            <h5>Consumo diaro<h5> 
                        @elseif ($viewData["dishHouse"]->getHealthyCategory() == '2')
                            <h5>Consumo semanal<h5> 
                        @else
                            <h5>Consumo ocasional<h5> 
                        @endif
                    </div>    
                </div>
            </div>
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Prepara tu plato </h3></label>
            <div class="ratio ratio-16x9">
                <iframe class="embed-responsive-item" src="{{ $viewData["dishHouse"]->getVideo() }}" allowfullscreen></iframe>
            </div>
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3>Otras personas también probaron</h3></label>
            <div class="card-group">
                <div class="card">
                    <img src="{{ asset('/storage/'.$viewData['recomendation']->getImage()) }}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <a href="{{ route('dishHouse.show', ['id'=> $viewData["recomendation"]->getId()]) }}" class="btn bg-primary text">
                        {{ $viewData["recomendation"]->getName() }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection