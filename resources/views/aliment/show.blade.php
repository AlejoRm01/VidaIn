@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="col-md-4">
        <img src="{{ asset('/storage/'.$viewData['aliment']->getImage()) }}" class="displayed ">
    </div>
    <div class="row-md-4">
        <div class="card-body align-items-center justify-content-center">
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Nombre </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["aliment"]->getName() }}   <h5> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Categoria </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["aliment"]->getCategory() }}<h5> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Marca </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["aliment"]->getBrand() }}<h5> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Peso </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["aliment"]->getWeight() }}<h5> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Calorias </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["aliment"]->getCalories() }}<h5> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Carbohidratos </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["aliment"]->getCarbohydrate() }}<h5> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Grasas </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["aliment"]->getFats() }}<h5> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Proteinas </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["aliment"]->getProteins() }}<h5> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Colesterol </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["aliment"]->getCholesterol() }}<h5> 
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection