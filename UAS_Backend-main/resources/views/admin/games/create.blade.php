@extends('layouts.admin')

@section('title')
    Game - create
@endsection

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Create</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.game.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Games</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection

@section('content')
    <form action="{{route('admin.game.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            @error('title')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description"></textarea>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Genre: </label>
            <select class="form-control" name="genre_id" aria-label="Default select example">
                @foreach($genres as $genre)
                    <option value="{{$genre->id}}">{{$genre->title}}</option>
                @endforeach
            </select>   

        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Image: </label>
            <input class="form-control-sm" name="image" id="formFileSm" type="file" onchange="previewImage(this)">
            <img id="imagePreview" src="{{asset('images/emptyPhoto.jpg')}}" alt="..." class="img-thumbnail" style="width: 300px; height: 200px">
            @error('image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="Price">
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
