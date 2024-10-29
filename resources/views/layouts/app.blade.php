<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/logoweb-modified.png">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">  
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="/css/chatbot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <header>
        <button id="refreshButton" class="alert alert-info text-center mb-0 w-100">
          Refresh website HairIdea!
        </button>
      </header>

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

     <style>
        /* CSS untuk navbar */
        .navbar-nav .nav-link {
            color: white !important; /* Change text color to white */
            padding: 0 20px !important; /* Add padding for spacing */
            font-size: 1.25rem; /* Increase font size */
        }

        body {
            color: white; /* Optional: change text color to ensure readability */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            @yield('background-style')
        }

        /* Ukuran Template Navbar */
        .navbar {
            width: 100%;
            margin: 50;
            padding: 50;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
          <a class="navbar-brand" href="/">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto d-flex align-items-center">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('tren') }}
                ">Tren Rambut</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('perawatan') }}
                ">Perawatan</a>              
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('faq') }}
                ">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('tentang') }}
                ">Tentang</a>
              </li>
            </ul>

            <ul class="navbar-nav ml-auto d-flex align-items-center justify-content-end"> 
              <li class="nav-item mb-3">
                <a id="open-chatbot" href="{{ url('chatbot') }}" class="btn btn-outline-light btn-md mt-3">Buka ChatBot</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    <!-- Bagian Content  -->
    <div class="container mt-5">
        @yield('content')
    </div>

    <!-- Bagian Footer -->
    @include('partials.footer')

    <!-- BotMan ChatBot Pembuka -->

     <!-- Bootstrap JS and dependencies untuk navbar agar kompatibel pada mobile -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     {{-- @yield('scripts') --}}

     <!-- JavaScript Untuk Button Chatbot di halaman Home -->
     <script>
      document.getElementById('open-chatbot').addEventListener('click', function() {
        window.location.href = <a href="/chatbot">Chatbot</a>
          // window.botmanChatWidget.open();
      });
    </script>

    {{-- Refresh halaman --}}
     <script>
      document.getElementById('refreshButton').addEventListener('click', function() {
          location.reload();
      });
   </script>
  </body>
</html>