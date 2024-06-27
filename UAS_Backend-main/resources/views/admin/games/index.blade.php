@extends('layouts.admin')

@section('title')
    Games
@endsection

@section('content-header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">List of Games</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active">Home</li>
                <li class="breadcrumb-item active">Games</li>
            </ol>
        </div><!-- /.col -->
    </div>
@endsection

@section('content')
    <div class="d-flex align-items-center mb-3">
        <p class="m-0 mr-3">Create a New Game:</p>
        <a href="{{route('admin.game.create')}}">
            <button class="btn btn-primary">Create</button>
        </a>
    </div>
    <div>
        <table class="table table-bordered">
            <thead style="vertical-align: middle;">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Genre</th>
                <th scope="col">Price</th>
                <th class="col-md-1" scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($games as $game)
                <tr>
                    <th scope="row" class="align-middle">{{$game->id}}</th>
                    <th scope="row" class="align-middle">{{$game->title}}</th>
                    <th scope="row">{{$game->description}}</th>
                    <th scope="row" class="align-middle">{{\App\Models\Genre::find($game->genre_id)->title}}</th>
                    <th scope="row" class="align-middle">{{$game->price}}</th>
                    <th class="align-middle">
                        <div class="d-flex">
                            <a class="mr-3"  href="{{route('admin.game.edit', $game->id)}}">
                                <button class="btn btn-primary">Edit</button>
                            </a>
                            <form action="{{route('admin.game.delete', $game->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn-danger btn">
                            </form>
                        </div>
                    </th>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex align-items-center mb-3">
            {{ $games->links() }}
        </div>
    </div>
@endsection
