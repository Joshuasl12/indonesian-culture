<!DOCTYPE html>
<html>

<head>
    <title>Indonesian Culture</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('/css/dashboard.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdjns.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Raleway", sans-serif
        }
        body,
        html {
            height: 100%;
            line-height: 1.8;
        }
        /* Full height image header*/
        .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url('/image/assets/Wallpaper.jpeg');
            min-height: 100%;
        }
        .d07-bar .d07-button {
            padding: 16px;
        }
    </style>
</head>

<body>
    <!--NAVBAR-->
    <div class="d07-top">
        <div class="d07-bar d07-white d07-card" id="DNavbar">
            <a href="#home" class="d07-bar-item d07-button d07-wide">Indonesian Culture</a>
            <!--NAVBAR LINK-->
            <div class="d07-right d07-hide-small">
                <a href="#about-us" class="d07-bar-item d07-button">About us</a>
                <a href="mailto:joshuasatyalaksana1@gmail.com" class="d07-bar-item d07-button">Contact</a>
            </div>
            <!--Menyembunyikan navbar ketika di HP-->
            <a href="javscript:void(0)" onclick="d07_close()" class="d07-bar-item d07-button d07-right d07-hidelarge d07-hide-medium" onclick="d07_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <!--SIDEBAR ON SMALL SCREENS WHEN CLICKING THE MENU ICON-->
    <nav class="d07-sidebars d07-bar-block d07-black d07-card d07-animate-left d07-hide-medium d07-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="d07_close()" class="d07-bar-item d07-button d07-large d07-padding-16">Close</a>
        <a href="#about-us" onclick="d07_close()" class="d07-bar-item d07-button">About us</a>
        <a href="mailto:joshuasatyalaksana1@gmail.com" onclick="d07_close()" class="d07-bar-item d07-button">Contact</a>
    </nav>
    <!--HEADER WITH FULL IMAGE-->
    <header class="bgimg-1 d07-display-container d07-grayscale-min" id="home">
        <div class="d07-display-left d07-text-white" style="padding:48px">
            <span class="d07-jumbo d07-hide-small"><strong>Welcome to Indonesian Culture 3D Website</span><br>
            <p><a href="#ar" class="d07-button d07-white d07-padding-large d07-large d07-margin-top d07-opacity d07-hover-opacity-off d07-round-large">Click Here!</a></p>
        </div>
        <div class="d07-displat-bottomleft d07-text-grey d07-large" style="padding:24px 48px">
            <i class="fa fa-facebook-offi   6   556cial d07-hover-opacity"></i>
            <i class="fa fa-instagram d07-hover-opacity"></i>
        </div>
    </header>
 
    <!--BAGIAN COLLECTION-->
    <div class="d07-container" style="padding:70px 16px" id="ar">
      <h3 class="d07-center">Our Collection</h3>
      <div style="display: flex; flex-wrap: wrap; width: 100%; gap: 16px; justify-content: center;">
        <div style="display: block; width: 400px;">
          <a href="{{ route('collection.house') }}">
            <img class="d07-image rumah-adat" src="{{url('/image/assets/Rumah adat.jpeg')}}" alt="rumah adat">
          </a>
          <div class="link valign-text-middle couriernew-regular-normal-black-24px">Rumah Adat</div>
        </div>
        <div style="display: block; width: 400px; ">
          <a href="{{ route('collection.music') }}">
            <img class="d07-image alat-musik" src="{{url('/image/assets/alat musik.jpeg')}}" alt="alat musik">
          </a>
          <div class="link valign-text-middle couriernew-regular-normal-black-24px">Alat Musik</div>
        </div>
        <div style="display: block; width: 400px; ">
          <a href="{{ route('collection.cloth') }}">
            <img class="d07-image pakaian-adat" src="{{url('/image/assets/Pakaian adat.jpeg')}}" alt="pakaian adat">
          </a>
          <div class="link valign-text-middle couriernew-regular-normal-black-24px">Pakaian Adat</div>
        </div>
        <div style="display: block; width: 400px; ">
          <a href="{{ route('collection.dance') }}">
            <img class="d07-image tarian-tradisional" src="{{url('/image/assets/Tarian Tradisional.jpeg')}}" alt="tarian tradisional">
          </a>
          <div class="link valign-text-middle couriernew-regular-normal-black-24px">Tarian Tradisional</div>
        </div>
        <div style="display: block; width: 400px; ">
          <a href="{{ route('collection.food') }}">
            <img class="d07-image makanan-khas" src="{{url('/image/assets/Makanan Tradisional.jpeg')}}" alt="makanan khas">
          </a>
          <div class="link valign-text-middle couriernew-regular-normal-black-24px">Makanan Khas</div>
        </div>
      </div>
    </div>

    <!-- BAGIAN ABOUT US -->
    <div class="about-section" id="about-us">
        <h1>About Us</h1>
      </div>
      <h2 style="text-align:center">Our Team</h2>
      <div class="row">
        <div class="column">
          <div class="card">
            <!-- <img src="/assets/joshua.jpg" alt="Joshua" style="width:100%"> -->
            <div class="container">
              <h2>Joshua Satya Laksana</h2>
              <p class="title">Web Developer</p>
              <p>joshuasatyalaksana1@gmail.com</p>
              <a href="mailto:joshuasatyalaksana1@gmail.com"><p><button class="button">Contact</button></p></a>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <!-- <img src="/assets/angel.jpeg" alt="Angel" style="width:100%"> -->
            <div class="container">
              <h2>Angelica Belinda Sugiharto</h2>
              <p class="title">3D Designer</p>
              <p>angelreza040703@gmail.com</p>
              <a href="mailto:angelreza040703@gmail.com"><p><button class="button">Contact</button></p></a>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <!-- <img src="/w3images/team3.jpg" alt="Marwah" style="width:100%"> -->
            <div class="container">
              <h2>Marwah Inas Rabbani</h2>
              <p class="title">UI/UX Designer</p>
              <p>marwahinasr@gmail.com</p>
              <a href="mailto:marwahinasr@gmail.com"><p><button class="button">Contact</button></p></a>
            </div>
          </div>
        </div>

        <div class="column">
            <div class="card">
              <!-- <img src="/w3images/team3.jpg" alt="Nurfaizah" style="width:100%"> -->
              <div class="container">
                <h2>Nurfaizah Herpristanti</h2>
                <p class="title">Web Designer</p>
                <p>nurfaizah.herpristanti@binus.ac.id</p>
                <a href="mailto:nurfaizah.herpristanti@binus.ac.id"><p><button class="button">Contact</button></p></a>
              </div>
            </div>
          </div>
      </div>

    <!--FOOTER SECTION-->
    <footer class="d07-center d07-black d07-padding-64">
        <p>Jakarta, Indonesia</p>
    </footer>
</body>

</html>