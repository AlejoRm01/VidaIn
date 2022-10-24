@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3 text-center">
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
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Descripción </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["dishHouse"]->getDescription() }}<h5> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Ingredientes </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["dishHouse"]->getIngredients() }}<h5> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Instrucciones </h3></label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <h5>{{ $viewData["dishHouse"]->getInstructions() }}<h5> 
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
        </div>
    </div>
</div>
<div class="card mb-3 text-center">
    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Prepara tu plato </h3></label>
    <div class="ratio ratio-16x9">
        <iframe class="embed-responsive-item" src="{{ $viewData["dishHouse"]->getVideo() }}" allowfullscreen></iframe>
    </div>
</div>

<div class="card mb-3 text-center">
        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3>Otras personas también probaron</h3></label>
    <div class="card-group">
        <div class="card">
            <img src="{{ asset('/storage/'.$viewData['recomendation_1']->getImage()) }}" class="card-img-top img-card">
            <div class="card-body text-center">
                <a href="{{ route('dishHouse.show', ['id'=> $viewData["recomendation_1"]->getId()]) }}" class="btn bg-primary text">
                    {{ $viewData["recomendation_1"]->getName() }}</a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('/storage/'.$viewData['recomendation_2']->getImage()) }}" class="card-img-top img-card">
            <div class="card-body text-center">
                <a href="{{ route('dishHouse.show', ['id'=> $viewData["recomendation_2"]->getId()]) }}" class="btn bg-primary text">
                    {{ $viewData["recomendation_2"]->getName() }}</a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('/storage/'.$viewData['recomendation_3']->getImage()) }}" class="card-img-top img-card">
            <div class="card-body text-center">
                <a href="{{ route('dishHouse.show', ['id'=> $viewData["recomendation_3"]->getId()]) }}" class="btn bg-primary text">
                    {{ $viewData["recomendation_3"]->getName() }}</a>
            </div>
        </div>
    </div>
</div>
    
</div>
@endsection