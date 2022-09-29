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

        <form method="POST" action="{{ route('admin.dishHouse.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Description:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="description" value="{{ old('description') }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Healthy Category:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="healthyCategory" value="{{ old('healthyCategory') }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Instructions:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="instructions" value="{{ old('instructions') }}" type="text" class="form-control">
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
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"></label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <div class="col">
                    &nbsp;
                </div>
                </div>
            </div>
        </form>
    </div>
</div>


<div class="card">
    <div class="card-header"> 
        Manage Dish House
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
                @foreach ($viewData["dishHouse"] as $dishHouse)
                <tr>
                    <td>{{ $dishHouse->getId() }}</td>
                    <td>{{ $dishHouse->getName() }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.dishHouse.edit', ['id'=> $dishHouse
                            ->getId()])}}">
                            <i class="bi-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('admin.dishHouse.delete', $dishHouse->getId())}}" method="POST"> 
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