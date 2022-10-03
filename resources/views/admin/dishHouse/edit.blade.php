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
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="name" value="{{ $viewData['dishHouse']->getName() }}" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Description:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="description" value="{{ $viewData['dishHouse']->getDescription() }}" type="textarea" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Category:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="healthyCategory" value="{{ $viewData['dishHouse']->getHealthyCategory() }}" type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Instructions:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="instructions" value="{{ $viewData['dishHouse']->getInstructions() }}" type="textarea" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Ingredients:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input name="ingredients" value="{{ $viewData['dishHouse']->getIngredients() }}" type="textarea" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
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
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label"></label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div
        </form>
    </div>
</div>

@endsection