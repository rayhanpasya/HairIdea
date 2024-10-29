@extends('layouts.app')

@section('title','HairIdea | FAQ')

@section('background-style')
    background-image: url('{{ asset('img/pageaja.jpg') }}');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center center;
@endsection

@section('content')
    <div class="container my-5">
        <h1 class="text-center mb-4" style="color: white; font-size: 2.5rem;">FAQ</h1>
        <div class="accordion" id="faqAccordion">
            @php
                $faqs = [
                    ['question' => 'Apa itu HairIdea?', 'answer' => 'HairIdea adalah website yang menyediakan rekomendasi tren gaya rambut berdasarkan bentuk wajah dan tipe rambut berbasis Chatbot.'],
                    ['question' => 'Bagaimana cara menggunakan Chatbot HairIdea?', 'answer' => 'Anda dapat memulai dengan mengklik <a href="/chatbot">Buka Chatbot</a> pada halaman home atau dibagian navbar kami untuk mendapatkan rekomendasi tren gaya rambut atau informasi perawatan rambut.'],
                    ['question' => 'Apa gaya rambut yang cocok untuk interview kerja?', 'answer' => 'HairIdea menyarankan untuk anda memilih opsi Comma Hair, Two Block, Buzz Cut. Untuk Tren Rambut lainnya bisa di cek pada <a href="/tren">Tren Rambut</a>.'],
                    ['question' => 'Apa gaya rambut yang cocok untuk siswa yang masih bersekolah?', 'answer' => 'HairIdea menyarankan untuk anda memilih opsi Bowl Cut & Buzz Cut. Untuk Tren Rambut lainnya bisa di cek pada <br><a href="/tren">Tren Rambut</a>.'],
                    ['question' => 'Apakah HairIdea gratis?', 'answer' => 'Ya, semua layanan di HairIdea dapat digunakan secara gratis.']
                ];
            @endphp

            @foreach($faqs as $index => $faq)
            <div class="card">
                <div class="card-header" id="heading{{ $index }}" style="background-color: #f8f9fa;">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}" style="color: black; font-size: 1.25rem;">
                            {{ $faq['question'] }}
                            <i class="fas fa-chevron-down float-right"></i>
                        </button>
                    </h2>
                </div>
                <div id="collapse{{ $index }}" class="collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-parent="#faqAccordion">
                    <div class="card-body" style="color: black; font-size: 1.15rem;">
                        {!! $faq['answer'] !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#faqAccordion .collapse').on('show.bs.collapse', function () {
                $(this).siblings('.card-header').find('.fas').removeClass('fa-chevron-down').addClass('fa-chevron-up');
            }).on('hide.bs.collapse', function () {
                $(this).siblings('.card-header').find('.fas').removeClass('fa-chevron-up').addClass('fa-chevron-down');
            });
        });
    </script>
@endsection

