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
    <div id="header-wrapper" class="header-wrapper">
      <div class="nav">
        <div class="logo">
          <img src="{{ asset('assets/logo.png') }}" alt="">
        </div>
        <div class="akun">
          <div style="font-size: x-large; font-weight: bold; color: gray;">Checkout</div>
        </div>
      </div>
    </div>

    @yield('content')

    {{-- footer --}}
    <div class="footer-wrapper">
      <div class="footer-list">
        <div>
          <h6>abata</h6>
          <div class="abata-list">
            <div>Tentang Kami</div>
            <div>Blog</div>
            <div>Mitra</div>
            <div>Pelanggan</div>
          </div>
        </div>
        <div>
          <h6>bantuan</h6>
          <div class="bantuan-list">
            <div>FAQ</div>
            <div>Cara Pesan</div>
            <div>Kebijakan Privasi</div>
            <div>Syarat & Ketentuan</div>
          </div>
        </div>
        <div>
          <h6>ikut kami</h6>
          <div class="medsos-list">
            <div><i class="fab fa-tiktok"></i> Tiktok</div>
            <div><i class="fab fa-facebook"></i> Facebook</div>
            <div><i class="fab fa-instagram"></i> Instagram</div>
            <div><i class="fab fa-twitter"></i> Twitter</div>
            <div><i class="fab fa-youtube"></i> Youtube</div>
          </div>
        </div>
        <div>
          <h6>pembayaran</h6>
          <div class="pembayaran-list">
            <div><img src="{{ asset('assets/bca.png') }}" alt="bca"></div>
            <div><img src="{{ asset('assets/mandiri.png') }}" alt="mandiri"></div>
            <div><img src="{{ asset('assets/bsi.png') }}" alt="bsi"></div>
            <div><img src="{{ asset('assets/bni.png') }}" alt="bni"></div>
            <div><img src="{{ asset('assets/bri.png') }}" alt="bri"></div>
            <div><img src="{{ asset('assets/cimb.png') }}" alt="cimb"></div>
          </div>
          <h6>pengiriman</h6>
          <div class="pengiriman-list">
            <div><img src="{{ asset('assets/jnt.png') }}" alt="jnt"></div>
            <div><img src="{{ asset('assets/jne.png') }}" alt="jne"></div>
            <div><img src="{{ asset('assets/sicepat.png') }}" alt="sicepat"></div>
          </div>
        </div>
      </div>
      <hr>
      <div class="footer-bottom">&copy;2022 Abata Printing. Hak Cipta Dilindungi.</div>
    </div>
  </div>
  
  <script src="{{ asset('vendor/swiper/swiper.js') }}"></script>
  <script src="{{ asset('js/script.js') }}"></script>

  <script>
    
  </script>

  @yield('script')
</body>
</html>
