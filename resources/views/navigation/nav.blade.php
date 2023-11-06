<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    footer {
        background-color: #333;
        color: #fff;
        padding: 20px 0;
    }

    footer a {
        color: #fff;
        text-decoration: none;
    }

    footer a:hover {
        text-decoration: underline;
    }

    @media (max-width: 767px) {
        footer {
            text-align: center;
        }

        footer h5 {
            margin-bottom: 15px;
        }
    }
    
</style>

<body>

    {{-- 
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-5">
              <li class="nav-item mt-2">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" href="#">View Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><button class="btn btn-primary">Add Product</button></a>
              </li>
            </ul>
          </div>
        </div>
      </nav> --}}


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand ms-4" href="/">CRUD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav  ms-auto me-5">
                <ul class="navbar-nav ms-auto me-5">
                    <li class="nav-item nb">
                        <a class="nav-link {{Route::is('home') ? 'active' : ''}}" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item nb">
                        <a class="nav-link {{Route::is('reade') ? 'active' : ''}}" href="{{ route('reade') }}">View</a>
                    </li>
                    <li class="nav-item nb">
                        <a class="nav-link {{Route::is('add') ? 'active' : ''}}" href="{{ route('add') }}">Add</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- @include('navigation/footer') --}}

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            {{-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ url('1a.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ url('2a.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ url('3a.png') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
            {{-- <span class="sr-only">Previous</span> --}}
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
            {{-- <span class="sr-only">Next</span> --}}
        </a>
    </div>
