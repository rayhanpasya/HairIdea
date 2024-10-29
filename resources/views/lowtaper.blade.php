@extends('layouts.app')

@section('background-style')
    background-image: url('{{ asset('img/pageaja.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center center;
@endsection

@section('title','HairIdea | Low Taper')

    @section('content')
    <div class="container my-5">
        <article class="text-center">
            <h2>{{ $lowtaper['title'] }}</h2>
            <img src="{{ asset('img/lowtaper.jpg') }}" alt="Low Taper" class="img-fluid my-3" width="350">
            <img src="{{ asset('img/lowtaper2.jpg') }}" alt="Low Taper" class="img-fluid my-3" width="250">
            <h5>By: {{ $lowtaper['author'] }}</h5>
            <h4>Berikut ialah gambaran contoh dari rekomendasi model gaya rambut yang cocok untuk semua bentuk wajah dan cocok untuk tipe rambut Ikal dan Keriting.</h4>
        </article>
        <div class="text-center">
            <a href="/tren" class="btn btn-primary mt-3">Kembali Ke Tren</a>
        </div>
    </div>
@endsection