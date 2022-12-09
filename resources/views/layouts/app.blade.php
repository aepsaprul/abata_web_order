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
    <div id="header-wrapper" class="header-wrapper sticky">
      <div class="nav">
        <div class="logo">
          <img src="{{ asset('assets/logo.png') }}" alt="">
        </div>
        <div class="nav-main">
          <div><a href="{{ url('/') }}">home</a></div>
          <div><a href="{{ route('produk') }}">produk</a></div>
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
          <div><a href="{{ route('transaksi.cart') }}"><i class="fas fa-shopping-cart"></i></a></div>
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
    window.onscroll = function() {
      myFunction();
    };
    // header sticky
    var header = document.getElementById("header-wrapper");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        header.classList.add("sticky")
      } else {
        header.classList.remove("sticky");
      }
    }
  </script>

  @yield('script')
</body>
</html>
