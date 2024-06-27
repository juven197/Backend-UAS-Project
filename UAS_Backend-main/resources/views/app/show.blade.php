@extends('layouts.app')

@section('header')
    {{$game->title}}
@endsection

@section('content')
    <div class="container">
        <div class="row bg-dark text-white mb-4" style="border-radius: 10px">
            <div class="col-md-7 mt-5 p-4">
                <h2>{{ $game->title }}</h2>
                <p><strong>Genre:</strong> {{ \App\Models\Genre::find($game->genre_id)->title }}</p>
                <p><strong>Description:</strong> {{ $game->description }}</p>
            </div>
            <div class="col-md-5 img-fluid mt-5 p-4">
                <img src="{{ asset( 'images/' . $game->image )}}" alt="{{ $game->title }}"
                     class="img-fluid justify-content-end mb-2"
                     style="max-width: 500px; height: 300px; border-radius: 10px"/>
                <h5 class="text-end">Rp. {{ $game->price }}</h5>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="button">Buy</button>
                </div>
            </div>
        </div>
    </div>
@endsection
