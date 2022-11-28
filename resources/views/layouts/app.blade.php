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
          <div>home</div>
          <div>produk</div>
          <div>cara pesan</div>
          <div>konfirmasi bayar</div>
        </div>
        <div class="akun">
          <button>register</button>
          <button>login</button>
        </div>
      </div>
      <div class="search">
        <input type="text" name="search" id="search" placeholder="cari produk" autocomplete="off">
        <button><i class="fa fa-search"></i></button>
      </div>
      <div class="nav-bottom">
        <div>home</div>
        <div>transaksi</div>
        <div>register</div>
        <div>login</div>
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
