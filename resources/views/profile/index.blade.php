@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')

<div class="container">
    <div class="row mb-3">
        <label  class="col-md-6 offset-md-2 fs-1 fw-bold" style="text-align:left;" >Tu perfil</label>
    </div>
</div>
<div class="card mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="name" value="{{  Auth::user()->getName()  }}" type="text" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Correo Electrónico:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="description" value="{{  Auth::user()->getEmail() }}" type="text" class="form-control">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Cédula:</label>
                    <div class="col-lg-10 col-md-6 col-sm-12">
                        <input name="description" value="{{  Auth::user()->getDocument() }}" type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header"> 
        Historial de alimentos
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Link</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["historyDishHouses"] as $historyDishHouse)
                <tr>
                    <td>{{ $historyDishHouse->getName() }}</td>
                    <td>{{ $historyDishHouse->getCreatedAt() }}</td>
                    <td>
                        <a class="btn bg-secondary btn-lg text-white" href="{{  route('dishHouse.show', ['id'=> $historyDishHouse->getDishHouseId() ]) }}""></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection