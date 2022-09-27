@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset('/storage/'.$viewData['aliment']->getImage()) }}" class="img-fluid rounded-start">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["aliment"]->getName() }} (${{ $viewData["aliment"]->getCategory() }})
                </h5>
                <p class="card-text">{{ $viewData["aliment"]->getBrand() }}</p>
                <p class="card-text">{{ $viewData["aliment"]->getWeight() }}</p>
                <p class="card-text">{{ $viewData["aliment"]->getCalories() }}</p>
                <p class="card-text">{{ $viewData["aliment"]->getCarbohydrates() }}</p>
                <p class="card-text">{{ $viewData["aliment"]->getFats() }}</p>
                <p class="card-text">{{ $viewData["aliment"]->getProteins() }}</p>
                <p class="card-text">{{ $viewData["aliment"]->getFiber() }}</p>
                <p class="card-text">{{ $viewData["aliment"]->getCholesterol() }}</p>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection