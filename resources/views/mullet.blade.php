@extends('layouts.app')

@section('background-style')
    background-image: url('{{ asset('img/pageaja.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center center;
@endsection

@section('title','HairIdea | Mullet')

    @section('content')
    <div class="container my-5">
        <article class="text-center">
            <h2>{{ $mullet['title'] }}</h2>
            <img src="{{ asset('img/mullet.jpg') }}" alt="Mullet" class="img-fluid my-3" width="400">
            <h5>By: {{ $mullet['author'] }}</h5>
            <h4>Berikut ialah gambaran contoh dari rekomendasi model gaya rambut yang cocok untuk bentuk wajah segitiga, oval, bulat dan cocok untuk semua tipe rambut.</h4>
        </article>
        <div class="text-center">
            <a href="/tren" class="btn btn-primary mt-3">Kembali Ke Tren</a>
        </div>
    </div>
@endsection

