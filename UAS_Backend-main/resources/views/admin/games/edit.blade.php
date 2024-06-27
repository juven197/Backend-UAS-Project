@extends('layouts.admin')

@section('title')
    {{$game->id}} - edit
@endsection

@section('content-header')
    <div class="row mb-2">
        <h1>Change {{$game->title}}</h1>
    </div>
@endsection

@section('content')
    <form action="{{route('admin.game.update', $game->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" name="title" class="form-control" value="{{$game->title}}" id="title" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea class="form-control" name="description" id="description" rows="3" placeholder="Description">{{$game->description}}</textarea>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Genre: </label>
            <select class="form-control" name="genre_id" aria-label="Default select example">
                @foreach($genres as $genre)
                    <option
                        {{$genre->id === $game->genre_id ? 'selected' : ''}}
                        value="{{$genre->id}}">{{$genre->title}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Image: </label>
            <input class="form-control-sm" value="{{asset($game->image)}}" name="image" id="formFileSm" type="file" onchange="previewImage(this)">
            <img id="imagePreview" src="{{asset('images/' . $game->image)}}" alt="..." class="img-thumbnail">
            @error('image')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="text" name="price" class="form-control" value="{{$game->price}}" id="price" placeholder="Price">
            @error('price')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Change</button>
    </form>
@endsection
