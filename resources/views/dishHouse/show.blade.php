@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="ratio ratio-16x9">
        <img src="{{ asset('/storage/'.$viewData['dishHouse']->getImage()) }}" class="displayed ">
    </div>
    <div class="row-md-4">
        <div class="card-body">
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Nombre </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["dishHouse"]->getName() }}<h5> 
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
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> instrucciones </h3></label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <h5>{{ $viewData["dishHouse"]->getInstructions() }}<h5> 
                        </div>    
                </div>
            </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Categoría saludable </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["dishHouse"]->getHealthyCategory() }}<h5> 
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card mb-3">
    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Prepara tu plato </h3></label>
    <div class="ratio ratio-16x9">
        <iframe class="embed-responsive-item" src="{{ $viewData["dishHouse"]->getVideo() }}" allowfullscreen></iframe>
    </div>
</div>
@endsection