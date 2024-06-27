@extends('layouts.app')

@section('header')
    Каталог
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('includes.app.catalog.filter')
            <div class="mb-2 col-md-9 bg-dark text-white" style="border-radius: 10px; height: 575px;">
                @forelse($games as $game)
                    <div class="game-card">
                        <img class="me-3" src="{{ asset( 'images/' . $game->image)}}" alt="">
                        <div class="game-card-info">
                            <a href="{{route('app.game.show', $game->id)}}"><h4
                                    class="game-card-title">{{ $game->title }}</h4></a>
                            <p>Genre: {{\App\Models\Genre::find($game->genre_id)->title}}</p>
                        </div>
                        <div class="game-card-price">
                            <p>Rp. {{ $game->price }}</p>
                            <button class="btn btn-primary w-100">Buy</button>
                        </div>
                    </div>
                @empty
                    <p>Games no available.</p>
                @endforelse
            </div>
            <div class="d-flex justify-content-end">
                {{$games->withQueryString()->links()}}
            </div>
        </div>
    </div>
@endsection
