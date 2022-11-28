@extends('layouts.app')

@section('content')
{{-- content --}}
<div class="content-wrapper">
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
