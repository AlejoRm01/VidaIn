@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="col-md-4">
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
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Categoria </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["dishHouse"]->getDescription() }}<h5> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Marca </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["dishHouse"]->getHealthyCategory() }}<h5> 
                    </div>    
                </div>
            </div>
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"><h3> Peso </h3></label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <h5>{{ $viewData["dishHouse"]->getInstructions() }}<h5> 
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection