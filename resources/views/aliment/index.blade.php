@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="container">
    <div class="row justify-content-center mb-3" style="text-align:center;">
        <label  class="col-md-6 offset-md-6 fs-3 fw-bold">Arrastra al plato la comida que deseas</label>
    </div> 
</div>

<div class="container">
    <div class="row">
       <div class="col">
        <div class="splide">
                <div class="col-2 splide__track">
                    <div class="splide__list">
                    @foreach ($viewData["aliments"] as $img)
                        <div class="col splide__slide ">
                            <div class="card bg-dark text-white">
                                <img src="{{  asset($img)  }}" class="card-img-top img-card img-resize2" alt="">
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
       </div>
       <div class="col-10">

       </div>
    </div>
</div>

@endsection