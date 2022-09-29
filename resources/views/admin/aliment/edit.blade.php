@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header"> Edit Product
    </div>
    <div class="card-body">
        @if($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach($errors->all() as $error) 
                    <li>- {{ $error }}</li> 
                @endforeach
            </ul>
        @endif
        <form method="POST" action="{{ route('admin.product.update', ['id'=> $viewData['aliment']->getId()]) }}"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="name" value="{{ $viewData['aliment']->getName() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Marca:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="brand" value="{{ $viewData['aliment']->getBrand() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Categoria:</label>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <input name="category" value="{{ $viewData['aliment']->getCategory() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Peso:</label>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <input name="weight" value="{{ $viewData['aliment']->getWeight() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Calorias:</label>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <input name="price" value="{{ $viewData['aliment']->getCalories() }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Carbohidratos:</label>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <input name="price" value="{{ $viewData['aliment']->getCarbohydrate() }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Grasas:</label>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <input name="price" value="{{ $viewData['aliment']->getFats() }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Proteinas:</label>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <input name="price" value="{{ $viewData['aliment']->getProteins() }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Fibras:</label>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <input name="price" value="{{ $viewData['aliment']->getFiber() }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-4 col-md-6 col-sm-12 col-form-label">Colesterol:</label>
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <input name="price" value="{{ $viewData['aliment']->getCholesterol() }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input class="form-control" type="file" name="image">
                        </div>
                    </div>
                </div>
                <div class="col"> 
                    &nbsp;
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div> 
@endsection