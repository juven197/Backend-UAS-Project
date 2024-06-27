@extends('layouts.admin')

@section("title")
    Home Page
@endsection

@section('content')
    <div class="container mt-5">
        <h1>Welcome to Admin Panel</h1>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Games</h5>
                        <p class="card-text">Game Management</p>
                        <a href="{{route('admin.game.index')}}" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Genres</h5>
                        <p class="card-text">Genre Management</p>
                        <a href="{{route('admin.genre.index')}}" class="btn btn-primary">Open</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
