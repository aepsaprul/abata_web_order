@extends('layouts.app')

@section('content')
{{-- conntent --}}
<div class="content-wrapper">
  <div class="cart">
    <div class="list list-title">
      <div class="title-produk">Produk</div>
      <div>Harga Satuan</div>
      <div>Jumlah</div>
      <div>Total Harga</div>
      <div class="title-aksi">Aksi</div>
    </div>
    <div class="list">
      <div class="list-produk">
        <div class="container">
          <img src="{{ asset('assets/8.jpg') }}" alt="">
          <p>Stiker Label A3+ (Full Color | CMYK)</p>
        </div>
      </div>
      <div class="harga">
        <p>Rp 23.000</p>
      </div>
      <div class="jumlah">
        <p>
          <input type="text" name="jumlah" id="jumlah" value="1">
          <button class="minus"><i class="fas fa-minus"></i></button>
          <button class="plus"><i class="fas fa-plus"></i></button>
        </p>
      </div>
      <div class="harga-total">
        <p>Rp 100.000.000</p>
      </div>
      <div class="aksi">
        <button><i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="list">
      <div class="list-produk">
        <div class="container">
          <img src="{{ asset('assets/5.jpg') }}" alt="">
          <p>Stiker Label A3+ (Full Color | CMYK)</p>
        </div>
      </div>
      <div class="harga">
        <p>Rp 23.000</p>
      </div>
      <div class="jumlah">
        <p>
          <input type="text" name="jumlah" id="jumlah" value="1">
          <button class="minus"><i class="fas fa-minus"></i></button>
          <button class="plus"><i class="fas fa-plus"></i></button>
        </p>
      </div>
      <div class="harga-total">
        <p>Rp 500.000</p>
      </div>
      <div class="aksi">
        <button><i class="fas fa-times"></i></button>
      </div>
    </div>
    <div class="list-footer">
      <div>Total: <span>Rp 5.000.000</span></div>
      <div>
        <button>Checkout</button>
      </div>
    </div>
  </div>
</div>
@endsection