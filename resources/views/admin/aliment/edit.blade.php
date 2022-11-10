@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header"> 
        Edit Aliment
    </div>
    <div class="card-body">
        @if($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $error) 
                    <li>- {{ $error }}</li> 
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{ route('admin.aliment.update', ['id'=> $viewData['aliment']->getId()]) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Codigo de barras:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="barCode" value="{{ $viewData['aliment']->getBarCode() }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="name" value="{{ $viewData['aliment']->getName() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Marca:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="brand" value="{{ $viewData['aliment']->getBrand() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Cateogria:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="category" value="{{ $viewData['aliment']->getCategory() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Peso:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="weight" value="{{ $viewData['aliment']->getWeight() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Calorias:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="calories" value="{{ $viewData['aliment']->getCalories() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Carbohidratos:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="carbohydrate" value="{{ $viewData['aliment']->getCarbohydrate() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Grasas:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="fats" value="{{ $viewData['aliment']->getFats() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Proteinas:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="proteins" value="{{ $viewData['aliment']->getProteins() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Fibra:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="fiber" value="{{ $viewData['aliment']->getFiber() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Colesterol:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="cholesterol" value=" {{ $viewData['aliment']->getCholesterol() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Imagen:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input class="form-control" type="file" name="image">
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Guardar</button>      
                </div>
                <div class="col">
                    &nbsp;
                </div>
            </div>
        </form>
    </div>
</div>
@endsection