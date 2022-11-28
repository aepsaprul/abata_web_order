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
  <div class="kategori">
    <h3>kategori produk</h3>
    <div class="kategori-list">
      <div>
        <img src="{{ asset('assets/kategori.png') }}" alt="kategri">
        <p>uv</p>
      </div>
      <div>
        <img src="{{ asset('assets/kategori.png') }}" alt="kategri">
        <p>dtf</p>
      </div>
      <div>
        <img src="{{ asset('assets/kategori.png') }}" alt="kategri">
        <p>a3</p>
      </div>
      <div>
        <img src="{{ asset('assets/kategori.png') }}" alt="kategri">
        <p>laser</p>
      </div>
    </div>
  </div>

  {{-- produk --}}
  <div class="produk">
    <h3>produk</h3>
    <div class="produk-list">
      <div>
        <img src="{{ asset('assets/1.jpg') }}" alt="produk">
        <p>Nama Produk</p>
        <p>Rp. 250.000</p>
      </div>
      <div>
        <img src="{{ asset('assets/2.jpg') }}" alt="produk">
        <p>Nama Produk</p>
        <p>Rp. 250.000</p>
      </div>
      <div>
        <img src="{{ asset('assets/3.jpg') }}" alt="produk">
        <p>Nama Produk</p>
        <p>Rp. 250.000</p>
      </div>
      <div>
        <img src="{{ asset('assets/4.jpg') }}" alt="produk">
        <p>Nama Produk</p>
        <p>Rp. 250.000</p>
      </div>
      <div>
        <img src="{{ asset('assets/5.jpg') }}" alt="produk">
        <p>Nama Produk</p>
        <p>Rp. 250.000</p>
      </div>
      <div>
        <img src="{{ asset('assets/6.jpg') }}" alt="produk">
        <p>Nama Produk</p>
        <p>Rp. 250.000</p>
      </div>
      <div>
        <img src="{{ asset('assets/7.jpg') }}" alt="produk">
        <p>Nama Produk</p>
        <p>Rp. 250.000</p>
      </div>
      <div>
        <img src="{{ asset('assets/8.jpg') }}" alt="produk">
        <p>Nama Produk</p>
        <p>Rp. 250.000</p>
      </div>
      <div>
        <img src="{{ asset('assets/9.jpg') }}" alt="produk">
        <p>Nama Produk</p>
        <p>Rp. 250.000</p>
      </div>
      <div>
        <img src="{{ asset('assets/10.jpg') }}" alt="produk">
        <p>Nama Produk</p>
        <p>Rp. 250.000</p>
      </div>
      <div>
        <img src="{{ asset('assets/1.jpg') }}" alt="produk">
        <p>Nama Produk</p>
        <p>Rp. 250.000</p>
      </div>
      <div>
        <img src="{{ asset('assets/2.jpg') }}" alt="produk">
        <p>Nama Produk</p>
        <p>Rp. 250.000</p>
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

  {{-- cabang --}}
  <div class="cabang">
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
  </div>
</div>    
@endsection

@section('script')
<script>
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
</script>
@endsection
