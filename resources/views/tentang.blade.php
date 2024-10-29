@extends('layouts.app')

@section('background-style')
    background-image: url('{{ asset('img/pageaja.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center center;
@endsection

@section('title','HairIdea | Tentang')

@section('content')
    <div class="container mt-8">
        <div class="text-center mb-4">
            <h1 style="color: white;">Tentang HairIdea</h1>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 style="color: white;">Misi Kami</h2>
                <p style="color: white; font-size: 1.15rem;">
                    HairIdea didirikan dengan tujuan membantu setiap individu menemukan gaya rambut yang paling sesuai dengan bentuk wajah dan jenis rambut mereka. Kami percaya bahwa rambut adalah salah satu aspek penting dari penampilan seseorang, dan gaya rambut yang tepat dapat meningkatkan kepercayaan diri dan menunjukkan kepribadian unik anda.
                </p>
                <h2 style="color: white;">Komitmen Kami</h2>
                <p style="color: white; font-size: 1.15rem;">
                    HairIdea berkomitmen untuk memberikan informasi yang akurat dan terpercaya. Tim kami terdiri dari para ahli di bidang perawatan rambut dan styling yang selalu up-to-date dengan tren terbaru. Kami juga mendengarkan masukan dari pengguna kami untuk terus meningkatkan layanan kami.
                </p>
                <h2 style="color: white;">Fitur Kami</h2>
                <ul style="color: white; font-size: 1.15rem;">
                    <li>Rekomendasi gaya rambut yang sedang tren menurut HairIdea berdasarkan bentuk wajah dan jenis rambut</li>
                    <li>Informasi perawatan rambut untuk menjaga kesehatan dan keindahan rambut Anda</li>
                    <li>Interaksi dengan chatbot kami untuk rekomendasi gaya rambut yang sesuai dengan bentuk wajah dan tipe rambut</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
