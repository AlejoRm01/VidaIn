@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')
<div class="card mb-4">
    <div class="card-header"> 
        Create Aliments
    </div>
    <div class="card-body">
        @if($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <form method="POST" action="{{ route('admin.aliment.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Codigo de barras:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="barCode" value="{{ old('barCode') }}" type="number"  class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Marca:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="brand" value="{{ old('brand') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Categoria:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="category" value="{{ old('category') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Peso:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="weight" value="{{ old('weight') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Calorias:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="calories" value="{{ old('calories') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Carbohidratos:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="carbohydrate" value="{{ old('carbohydrate') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Grasas:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="fats" value="{{ old('fats') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Proteinas:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="proteins" value="{{ old('proteins') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Fibra:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="fiber" value="{{ old('fiber') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Colesterol:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="cholesterol" value="{{ old('cholesterol') }}" type="text" class="form-control">
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


<div class="card">
    <div class="card-header"> 
        Manage Aliments
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["aliments"] as $aliment)
                <tr>
                    <td>{{ $aliment->getId() }}</td>
                    <td>{{ $aliment->getName() }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.aliment.edit', ['id'=> $aliment->getId()])}}">
                            <i class="bi-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('admin.aliment.delete', $aliment->getId())}}" method="POST"> 
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"> <i class="bi-trash"></i>
                            </button> 
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection