@extends('layouts.app')

@section('content')
{{-- content --}}
<div class="content-wrapper">
  {{-- banner --}}
  <div class="banner">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="{{ asset('assets/banner-1.webp') }}" alt="slide">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/banner-2.jfif') }}" alt="slide">
        </div>
        <div class="swiper-slide">
          <img src="{{ asset('assets/banner-3.webp') }}" alt="">
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

  {{-- kategori --}}
  @include('pages.kategori')

  {{-- produk --}}
  <div class="produk">
    <h3>produk</h3>
    <div class="produk-list">
      <div>
        <a href="{{ route('produk.detail', [1]) }}">
          <img src="{{ asset('assets/1.jpg') }}" alt="produk">
          <p>Nama Produk</p>
          <p>Rp. 250.000</p>
        </a>
      </div>
      <div>
        <a href="{{ route('produk.detail', [1]) }}">
          <img src="{{ asset('assets/2.jpg') }}" alt="produk">
          <p>Nama Produk</p>
          <p>Rp. 250.000</p>
        </a>
      </div>
      <div>
        <a href="{{ route('produk.detail', [1]) }}">
          <img src="{{ asset('assets/3.jpg') }}" alt="produk">
          <p>Nama Produk</p>
          <p>Rp. 250.000</p>
        </a>
      </div>
      <div>
        <a href="{{ route('produk.detail', [1]) }}">
          <img src="{{ asset('assets/4.jpg') }}" alt="produk">
          <p>Nama Produk</p>
          <p>Rp. 250.000</p>
        </a>
      </div>
      <div>
        <a href="{{ route('produk.detail', [1]) }}">
          <img src="{{ asset('assets/5.jpg') }}" alt="produk">
          <p>Nama Produk</p>
          <p>Rp. 250.000</p>
        </a>
      </div>
      <div>
        <a href="{{ route('produk.detail', [1]) }}">
          <img src="{{ asset('assets/6.jpg') }}" alt="produk">
          <p>Nama Produk</p>
          <p>Rp. 250.000</p>
        </a>
      </div>
      <div>
        <a href="{{ route('produk.detail', [1]) }}">
          <img src="{{ asset('assets/7.jpg') }}" alt="produk">
          <p>Nama Produk</p>
          <p>Rp. 250.000</p>
        </a>
      </div>
      <div>
        <a href="{{ route('produk.detail', [1]) }}">
          <img src="{{ asset('assets/8.jpg') }}" alt="produk">
          <p>Nama Produk</p>
          <p>Rp. 250.000</p>
        </a>
      </div>
      <div>
        <a href="{{ route('produk.detail', [1]) }}">
          <img src="{{ asset('assets/9.jpg') }}" alt="produk">
          <p>Nama Produk</p>
          <p>Rp. 250.000</p>
        </a>
      </div>
      <div>
        <a href="{{ route('produk.detail', [1]) }}">
          <img src="{{ asset('assets/10.jpg') }}" alt="produk">
          <p>Nama Produk</p>
          <p>Rp. 250.000</p>
        </a>
      </div>
      <div>
        <a href="{{ route('produk.detail', [1]) }}">
          <img src="{{ asset('assets/1.jpg') }}" alt="produk">
          <p>Nama Produk</p>
          <p>Rp. 250.000</p>
        </a>
      </div>
      <div>
        <a href="{{ route('produk.detail', [1]) }}">
          <img src="{{ asset('assets/2.jpg') }}" alt="produk">
          <p>Nama Produk</p>
          <p>Rp. 250.000</p>
        </a>
      </div>
    </div>
    <div class="produk-pagination">
      <div><i class="fas fa-chevron-left"></i></div>
      <div>1</div>
      <div>2</div>
      <div>3</div>
      <div>4</div>
      <div>5</div>
      <div><i class="fas fa-chevron-right"></i></div>
    </div>
  </div>

  <div class="cara-pesan">
    <h3>cara pesan</h3>
    <div class="cara-pesan-content">
      <div>
        <img src="{{ asset('assets/cara-pesan.webp') }}" alt="">
      </div>
      <div>
        <div>
          <button class="collapsible">1. Klik gambar produk yang akan di pesan</button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div>
          <button class="collapsible">2. Lihat keranjang pesanan</button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div>
          <button class="collapsible">3. Upload desain</button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div>
          <button class="collapsible">4. Proses checkout</button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div>
          <button class="collapsible">5. Proses pengecekan oleh Admin</button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div>
          <button class="collapsible">6. Konfirmasi pembayaran</button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div>
          <button class="collapsible">7. Proses pengecekan konfirmasi pembayaran</button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
        <div>
          <button class="collapsible">8. Proses pengiriman produk</button>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- cabang --}}
  {{-- <div class="cabang">
    <h3>hubungi kami</h3>
    <div class="cabang-list">
      <div>
        <h4>situmpur</h4>
        <p><i class="fab fa-whatsapp"></i> 0812345678</p>
        <p><i class="far fa-envelope"></i> situmpur@gmail.com</p>
        <p><i class="fas fa-map-marked-alt"></i> <a href="https://goo.gl/maps/KbfiyCPNonDp8UQG6">Lokasi Map</a></p>
        <p>Jl Situmpur No 11</p>
      </div>
      <div>
        <h4>dukuh waluh</h4>
        <p><i class="fab fa-whatsapp"></i> 0812345678</p>
        <p><i class="far fa-envelope"></i> situmpur@gmail.com</p>
        <p><i class="fas fa-map-marked-alt"></i> <a href="https://goo.gl/maps/KbfiyCPNonDp8UQG6">Lokasi Map</a></p>
        <p>Jl Situmpur No 11</p>
      </div>
      <div>
        <h4>hr</h4>
        <p><i class="fab fa-whatsapp"></i> 0812345678</p>
        <p><i class="far fa-envelope"></i> situmpur@gmail.com</p>
        <p><i class="fas fa-map-marked-alt"></i> <a href="https://goo.gl/maps/KbfiyCPNonDp8UQG6">Lokasi Map</a></p>
        <p>Jl Situmpur No 11</p>
      </div>
      <div>
        <h4>purbalingga</h4>
        <p><i class="fab fa-whatsapp"></i> 0812345678</p>
        <p><i class="far fa-envelope"></i> situmpur@gmail.com</p>
        <p><i class="fas fa-map-marked-alt"></i> <a href="https://goo.gl/maps/KbfiyCPNonDp8UQG6">Lokasi Map</a></p>
        <p>Jl Situmpur No 11</p>
      </div>
      <div>
        <h4>cilacap</h4>
        <p><i class="fab fa-whatsapp"></i> 0812345678</p>
        <p><i class="far fa-envelope"></i> situmpur@gmail.com</p>
        <p><i class="fas fa-map-marked-alt"></i> <a href="https://goo.gl/maps/KbfiyCPNonDp8UQG6">Lokasi Map</a></p>
        <p>Jl Situmpur No 11</p>
      </div>
      <div>
        <h4>bumiayu</h4>
        <p><i class="fab fa-whatsapp"></i> 0812345678</p>
        <p><i class="far fa-envelope"></i> situmpur@gmail.com</p>
        <p><i class="fas fa-map-marked-alt"></i> <a href="https://goo.gl/maps/KbfiyCPNonDp8UQG6">Lokasi Map</a></p>
        <p>Jl Situmpur No 11</p>
      </div>
    </div>
  </div> --}}
</div>    
@endsection

@section('script')
<script>
  // slider
  var swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // cara pesan
  var coll = document.getElementsByClassName("collapsible");
  var i;

  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      } 
    });
  }
</script>
@endsection
