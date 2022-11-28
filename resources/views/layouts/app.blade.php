<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name', 'Abata') }}</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/swiper/swiper.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  @yield('style')
</head>
<body>
  <div class="wrapper">
    {{-- header --}}
    <div class="header-wrapper">
      <div class="nav">
        <div class="logo">
          <img src="{{ asset('assets/logo.png') }}" alt="">
        </div>
        <div class="nav-main">
          <div><a href="#">home</a></div>
          <div><a href="#">produk</a></div>
          <div><a href="#">cara pesan</a></div>
          <div><a href="#">konfirmasi bayar</a></div>
        </div>
        <div class="nav-search">
          <div>
            <input type="text" name="search" id="search" placeholder="cari produk" autocomplete="off">
            <button><i class="fa fa-search"></i></button>
          </div>
        </div>
        <div class="akun">
          <div><i class="fas fa-shopping-cart"></i></div>
          <div><button class="register">register</button></div>
          <div><button class="login">login</button></div>
        </div>
      </div>
      <div class="search">
        <div>
          <input type="text" name="search" id="search" placeholder="cari produk" autocomplete="off">
          <button><i class="fa fa-search"></i></button>
        </div>
      </div>
      <div class="nav-bottom">
        <div>
          <i class="fas fa-home"></i>
          <p>home</p>
        </div>
        <div>
          <i class="fas fa-exchange-alt"></i>
          <p>transaksi</p>
        </div>
        <div>
          <i class="fas fa-edit"></i>
          <p>register</p>
        </div>
        <div>
          <i class="fas fa-sign-in-alt"></i>
          <p>login</p>
        </div>
      </div>
    </div>

    @yield('content')

    {{-- footer --}}
    <div class="footer-wrapper">

    </div>
  </div>
  
  <script src="{{ asset('vendor/swiper/swiper.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>

  @yield('script')
</body>
</html>
