@extends('layouts.app')

@section('background-style')
    background-image: url('{{ asset('img/pageaja.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center center;
@endsection

@section('title','HairIdea | Two Block')

    @section('content')
    <div class="container my-5">
        <article class= "text-center">
            <h2>{{ $twoblock['title'] }}</h2>
            <img src="{{ asset('img/twoblock.jpg') }}" alt="Two Block" class="img-fluid my-3" width="400">
            <h5>By: {{ $twoblock['author'] }}</h5>
            <h4>Berikut ialah gambaran contoh dari rekomendasi model gaya rambut yang cocok untuk bentuk wajah oval dan segitiga dan cocok untuk tipe rambut lurus dan bergelombang.</h4>
        </article>
        <div class="text-center">
            <a href="/tren" class="btn btn-primary mt-3">Kembali Ke Tren</a>
        </div>
    </div>
@endsection

