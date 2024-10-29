<!DOCTYPE html>
<html lang="en">
<head>
    <title>HairIdea | Chatbot</title> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logoweb-modified.png">
    <link rel="stylesheet" href="css/chatbot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<style>
    body {
        @yield('background-style')
        
    }
    .object-fit-cover {
        object-fit: cover;
    }
    .text-shadow {
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
 </style>
<body>
     
    <!-- Navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
          <a class="navbar-brand" href="/">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('tren') }}">Tren Rambut</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('perawatan') }}">Perawatan</a>              
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('faq') }}">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('tentang') }}">Tentang</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto d-flex align-items-center justify-content-end"> 
                <li class="nav-item mb-3">
                  <button id="open-chatbot" class="btn btn-outline-light btn-md mt-3">Buka ChatBot</button>
                </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="row d-flex align-items-center vh-auto justify-content-center">
        {{-- Gambar --}}
        <div class="col-md-8 d-flex align-items-center justify-content-center" style="background-image:url(img/scissors-combs-copy-space.jpg); background-size: cover; background-position: center; height: 85vh;">
            <div class="overlay-text text-center" style="color: white; font-size: 4rem; font-weight: bold;">
                <h1 class= "text-shadow" style="font-size: 4rem;">HairIdea Chatbot</h1>
                <div class="faq mt-8" style="font-size: 1.5rem;">
                    <button class="btn btn-dark text-shadow" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse" aria-expanded="false" aria-controls="faqCollapse">
                        Tentang Chatbot
                    </button>
                    <div class="collapse" id="faqCollapse">
                        <div class="card card-body text-black mt-3">
                            <p>Ketik 'Hallo' lagi pada chatbot setelah chatbot selesai menjawab pertanyaan kamu untuk memulai ulang Chatbot, atau bisa mengklik button 'Reset Chat' pada Chatbot .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Chatbot --}}
        <div class="col-md-4" style="background-image:url(img/belakang.jpg); background-size: cover; background-position: center; height: 85vh;">>
            <div class="wrapper mt-5">
                <div class="title bg-secondary text-shadow">HairIdea Chatbot</div>
                <button id="clear-btn" class="btn btn-primary text-shadow mt-2" style="padding-right: auto;">Reset Chat</button>
                {{-- <button id="send-btn">Kirim</button>           --}}
                <div class="form">
                    <div class="bot-inbox inbox">
                        <div class="icon bg-secondary">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="msg-header">
                            <p class="bg-secondary">Halo, Apakah ada yang bisa saya bantu?, Ketik <b>Hallo</b> untuk berinteraksi dengan Chatbot</p>
                        </div>
                    </div>
                </div>
                <div class="typing-field">
                    <div class="input-data">
                        <input id="data" type="text" placeholder="Ketikan sesuatu....'" required>
                        <button id="send-btn">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            
            // Fungsi untuk mengirim pesan
            function sendMessage() {
                var $value = $("#data").val();
                var $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // code ajax (library javascript)
                $.ajax({
                    url: 'php/message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        var $replay = '<div class="bot-inbox inbox"><div class="icon bg-secondary"><i class="fas fa-user"></i></div><div class="msg-header"><p class="bg-secondary">'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            }

            // Kirim pesan saat tombol "Send" diklik
            $("#send-btn").on("click", function(){
                sendMessage();
            });

            // Kirim pesan saat tombol "Enter" ditekan
            $("#data").on("keypress", function(e) {
                if (e.which == 13) { // 13 adalah kode untuk tombol Enter
                    sendMessage();
                    return false; // Mencegah form submit
                }
            });

            // Membersihkan riwayat chat saat tombol "Clear Chat" diklik
            $("#clear-btn").on("click", function(){
                $(".form").html('<div class="bot-inbox inbox"><div class="icon bg-secondary"><i class="fas fa-user"></i></div><div class="msg-header"><p class="bg-secondary">Halo, Apakah ada yang bisa saya bantu?, Ketik <b>Hallo</b> untuk berinteraksi dengan Chatbot</p></div></div>');
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</body>
</html>

