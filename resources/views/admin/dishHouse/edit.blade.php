@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header"> 
        Edit Dish House
    </div>
    <div class="card-body">
        @if($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $error) 
                    <li>- {{ $error }}</li> 
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{ route('admin.dishHouse.update', ['id'=> $viewData['dishHouse']->getId()]) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="name" value="{{ $viewData['dishHouse']->getName() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Descripción:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="description" value="{{  $viewData['dishHouse']->getDescription() }}" type="textarea" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Categoria:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <select name="healthyCategory" value="$viewData['dishHouse']->getHealthyCategory() }}" type="numbre" class="form-select form-select-sm">
                                <option value="Consumo diario">Consumo diario</option>
                                <option value="Consumo semanal">Consumo semanal</option>
                                <option value="Consumo ocasional">Consumo ocasional</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Instrucciones:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="instructions" value="{{ $viewData['dishHouse']->getInstructions() }}" type="textarea" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Ingredientes:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="ingredients" value="{{  $viewData['dishHouse']->getIngredients() }}" type="textarea" class="form-control">
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
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Video:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="video" value="{{ $viewData['dishHouse']->getVideo() }}" type="textarea" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Categoria diaria:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <select name="dailyCategory" value="{{ $viewData['dishHouse']->getDailyCategory() }}" type="textarea" class="form-select form-select-sm">
                                <option value="Desayuno">Desayuno</option>
                                <option value="Almuerzo">Almuerzo</option>
                                <option value="Cena">Cena</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"></label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </div>
            </div
        </form>
    </div>
</div>

@endsection