<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/collection.css') }}">
    <link rel="stylesheet" href="{{ url('/css/collectionDetails.css') }}">
    <link rel="stylesheet" href="{{ url('/css/province.css') }}">
    <link rel="stylesheet" href="{{url('/css/dashboard.css')}}">
    <link rel="stylesheet" href="{{url('/css/3d.css')}}">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0" />

    <title>{{$title}}</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-danger fixed-top z-2 ">
        <div class="container-fluid ">
          <a class="navbar-brand text-light" href="{{ route('dashboard') }}">INDONESIAN CULTURE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active text-light" aria-current="page" href="{{ route('dashboard') }}">Home</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link active text-light" href="#">About</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link active text-light" href="mailto:joshuasatyalaksana1@gmail.com">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class=" z-3 top-50" style="position: fixed;">
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="px-2 py-4 bg-danger text-white rounded-end-4">
            Menu
          </span>
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Indonesia Culture</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link active fs-5" aria-current="page" href="#">Provinsi</a>
                <div class="d-flex flex-column">
                    @foreach ($province as $item)
                        <a href="{{ route('province', $item->id)}}">{{$item->nama_provinsi}}</a> <br>
                    @endforeach
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link active fs-5" href="#">3D</a>
                <div class="d-flex flex-column">
                    <a href="{{ route('collection.house') }}">Rumah Adat</a><br>
                    <a href="{{ route('collection.music') }}">Alat Musik</a><br>
                    <a href="{{ route('collection.cloth') }}">Pakaian Adat</a><br>
                    <a href="{{ route('collection.dance') }}">Tarian Tradisional</a><br>
                    <a href="{{ route('collection.food') }}">Makanan Khas</a><br>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>    

    @yield('content')
    <nav class="box" style="height: 40px; width: 0px;">
        <div class="container2">
            <a class="navbar-brand" href="#">INDONESIAN CULTURE</a>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.1.1/model-viewer.min.js"></script>

    <footer class="d07-center d07-black d07-padding-64">
        <p>Jakarta, Indonesia</p>
    </footer>
</body>

</html>
