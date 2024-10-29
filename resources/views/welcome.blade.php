@extends('layouts.app')

@section('title','HairIdea')

@section('background-style')
    background-image: url('{{ asset('img/scissors-combs-copy-space.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center center;
    color: white;
@endsection

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 80vh;">
    <div class="text-center text-white">
     <h1 class="text-shadow">Selamat Datang di Situs HairIdea</h1>
     <h2 class="text-shadow">Temukan informasi tentang Tren rambut dan Perawatan rambut.</h2>
     <p>Mulai dengan klik <a href={{ url("chatbot") }}> <span class="bg-light rounded rounded-3 px-2">Buka Chatbot</span></a> untuk mencari rekomendasi rambut yang sesuai dengan bentuk wajah dan tipe rambut kamu!!</p>
    </div>
</div>
@endsection
