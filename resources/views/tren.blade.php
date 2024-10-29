@extends('layouts.app')

@section('background-style')
    background-image: url('{{ asset('img/pageaja.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center center;
    color: black;
@endsection

@section('title','HairIdea | Tren Rambut')

    @section('content')    
    <div class="container">
        <h1 class="text-center my-4" style="color: white;">Tren Rambut</h1>
        <div class="row">
            @foreach ($tren as $item)
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title" style="color: blue;">{{ $item['title'] }}</h5>
                            <h6 class="card-subtitle" style="color: green;">By: {{ $item['author'] }}</h6>
                            <p class="card-text">{{ $item['body'] }}</p>
                            <div class="text-center">
                                <a href="{{ url('tren/' . $item['slug']) }}" class="btn btn-primary mt-1">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

