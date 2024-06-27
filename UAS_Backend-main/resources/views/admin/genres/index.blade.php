@extends('layouts.admin')

@section('title')
    Genres
@endsection

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Genres</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Home</li>
                <li class="breadcrumb-item active">Genres</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection

@section('content')
    <div class="d-flex align-items-center mb-3">
        <a href="{{route('admin.genre.create')}}">
            <button class="btn btn-primary">Create a new Genre</button>
        </a>
    </div>

    <div>
        <table class="table table-bordered">
            <thead style="vertical-align: middle;">
            <tr>
                <th scope="col" class="col-sm-1">ID</th>
                <th scope="col">Genre</th>
                <th scope="col" class="col-sm-3">Number of games in this genre</th>
                <th class="col-sm-1" scope="col">action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($genres as $genre)
                <tr>
                    <th scope="row">{{$genre->id}}</th>
                    <th scope="row">{{$genre->title}}</th>
                    <th scope="row">{{App\Models\Game::where('genre_id', $genre->id)->get()->count()}}</th>
                    <th class="d-flex justify-content-around">
                        <form action="{{route('admin.genre.delete', $genre->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn-danger btn">
                        </form>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
