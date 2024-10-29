@extends('layouts.app')

@section('background-style')
    background-image: url('{{ asset('img/pageaja.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center center;
@endsection

@section('title','HairIdea | Bowl cut')

    @section('content')
    <div class="container my-5">
        <article class= "text-center">
            <h2>{{ $bowl['title'] }}</h2>
            <img src="{{ asset('img/bowlcut2.jpg') }}" alt="Bowl Cut" class="img-fluid my-3" width="500">
            <h5>By: {{ $bowl['author'] }}</h5>
            <h4>Berikut ialah gambaran contoh dari rekomendasi model gaya rambut yang cocok untuk bentuk wajah kotak dan cocok untuk tipe rambut ikal dan keritng.</h4>
        </article>
        <div class="text-center">
            <a href="/tren" class="btn btn-primary mt-3">Kembali Ke Tren</a>
        </div>
    </div>
@endsection

