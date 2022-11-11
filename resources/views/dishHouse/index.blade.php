@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
    <div class="col-lg-5 mb-5">
        <form method="GET" action="{{ route('dishHouse.search') }}" enctype="multipart/form-data" class="d-flex">
            <input class="form-control me-2" name="query" type="Search" placeholder="Buscar" aria-label="Search">
            <button class="btn bg-secondary text-white" type="submit">Buscar</button>
        </form>
    </div>
</div>

<div class="row">
    @foreach ($viewData["dishHouses"] as $dishHouse)
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <img src="{{ asset('/storage/'.$dishHouse->getImage()) }}" class="card-img-top img-card">
            <div class="card-body text-center">
                <a style="text-transform:uppercase;" href="{{ route('dishHouse.show', ['id'=> $dishHouse->getId()]) }}" class="btn bg-primary text">
                    {{ $dishHouse->getName() }}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection