@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
    <div class="col-lg-5 mb-5">
        <form method="GET" action="{{ route('aliment.search') }}" enctype="multipart/form-data" class="d-flex">
            <input class="form-control me-2" name="query" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>
</div>

<div class="row">
    @foreach ($viewData["aliments"] as $aliment)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <img src="{{ asset('/storage/'.$aliment->getImage()) }}" class="card-img-top img-card">
            <div class="card-body text-center">
                <a href="{{ route('aliment.show', ['id'=> $aliment->getId()]) }}" class="btn bg-primary text-white">
                    {{ $aliment->getName() }}</a>
            </div>
            <div class="card-text text-center mb-3">
                <h5>${{ $aliment->getBrand() }}</h5>
            </div>
            <div class="card-text text-center mb-3">
                <h5>${{ $aliment->getCategory() }}</h5>
            </div>
            <div class="card-text text-center mb-3">
                <h5>${{ $aliment->getWeight() }}</h5>
            </div>
            <div class="card-text text-center mb-3">
                <h5>${{ $aliment->getCalories() }}</h5>
            </div>
            <div class="card-text text-center mb-3">
                <h5>${{ $aliment->getCarbohydrates() }}</h5>
            </div>
            <div class="card-text text-center mb-3">
                <h5>${{ $aliment->getFats() }}</h5>
            </div>
            <div class="card-text text-center mb-3">
                <h5>${{ $aliment->getProteins() }}</h5>
            </div>
            <div class="card-text text-center mb-3">
                <h5>${{ $aliment->getFiber() }}</h5>
            </div>
            <div class="card-text text-center mb-3">
                <h5>${{ $aliment->getCholesterol() }}</h5>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection