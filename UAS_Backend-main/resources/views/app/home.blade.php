@extends('layouts.app')

@section('header')
    Home
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-white">
                <h1 class="text-center">Welcome to Game Store</h1>
                <p class="lead text-center">Here you will find affordable and high-quality games</p>
            </div>
        </div>

        <div class="row mt-5">
            @foreach($games as $game)
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset( 'images/' . $game->image) }}" style="width: 414px; height: 194px;">
                        <div class="card-body">
                            <a href="{{route('app.game.show', $game->id)}}"><h5 class="card-title">{{ $game->title }}</h5></a>
                            <a href="#" class="btn btn-primary">Rp. {{ $game->price }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
