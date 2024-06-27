@extends('layouts.admin')

@section('title')
    Game - create
@endsection

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Create a new Genre</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{route('admin.genre.index')}}">Home</a></li>
                <li class="breadcrumb-item active">Genres</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection

@section('content')
    <form action="{{route('admin.genre.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Genre:</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Название">
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
