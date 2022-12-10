@extends('layouts.appdua')

@section('content')
{{-- conntent --}}
<div class="appdua-wrapper">
  <div class="checkout">
    <div class="alamat">
      <h3>Alamat Pengiriman</h3>
      <form action="#">
        <div>
          <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
        </div>
        <div>
          <input type="text" name="telepon" id="telepon" placeholder="Nomor HP">
        </div>
        <div>
          <input type="text" name="provinsi" id="provinsi" placeholder="Provinsi">
        </div>
        <div>
          <input type="text" name="kota" id="kota" placeholder="Kabupaten/Kota">
        </div>
        <div>
          <input type="text" name="kecamatan" id="kecamatan" placeholder="Kecamatan">
        </div>
        <div>
          <input type="text" name="kodepos" id="kodepos" placeholder="Kodepos">
        </div>
        <div class="alamat-detail">
          <textarea type="text" name="alamat_detail" id="alamat-detail" rows="4" placeholder="Nama Jalan, Gedung, No Rumah"></textarea>
        </div>
      </form>
    </div>
    <div class="cart">
      <h3>Pesanan</h3>
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
          <p>2</p>
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
          <p>2</p>
        </div>
        <div class="harga-total">
          <p>Rp 500.000</p>
        </div>
        <div class="aksi">
          <button><i class="fas fa-times"></i></button>
        </div>
      </div>
    </div>
    <div class="opsi">
      <div class="pengiriman">
        <h3>Pilih Pengiriman</h3>
        <div class="list">
          <label class="radio-container">
            <img src="{{ asset('assets/jnt.png') }}" alt="">
            <input type="radio" checked="checked" name="input_pengiriman">
            <span class="checkmark"></span>
            <p>Rp. 10.000</p>
          </label>
          <label class="radio-container">
            <img src="{{ asset('assets/sicepat.png') }}" alt="">
            <input type="radio" name="input_pengiriman">
            <span class="checkmark"></span>
            <p>Rp. 10.000</p>
          </label>
          <label class="radio-container">
            <img src="{{ asset('assets/jne.png') }}" alt="">
            <input type="radio" name="input_pengiriman">
            <span class="checkmark"></span>
            <p>Rp. 10.000</p>
          </label>
        </div>
      </div>
      <div class="pembayaran">
        <h3>Pilih Pembayaran</h3>
        <div class="list">
          <label class="radio-container">
            <img src="{{ asset('assets/bca.png') }}" alt="">
            <input type="radio" checked="checked" name="input_pembayaran">
            <span class="checkmark"></span>
          </label>
          <label class="radio-container">
            <img src="{{ asset('assets/mandiri.png') }}" alt="">
            <input type="radio" name="input_pembayaran">
            <span class="checkmark"></span>
          </label>
          <label class="radio-container">
            <img src="{{ asset('assets/bsi.png') }}" alt="">
            <input type="radio" name="input_pembayaran">
            <span class="checkmark"></span>
          </label>
          <label class="radio-container">
            <img src="{{ asset('assets/bni.png') }}" alt="">
            <input type="radio" name="input_pembayaran">
            <span class="checkmark"></span>
          </label>
          <label class="radio-container">
            <img src="{{ asset('assets/bri.png') }}" alt="">
            <input type="radio" name="input_pembayaran">
            <span class="checkmark"></span>
          </label>
          <label class="radio-container">
            <img src="{{ asset('assets/cimb.png') }}" alt="">
            <input type="radio" name="input_pembayaran">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
    </div>
    <div class="total">
      <div class="title">
        <p>Subtotal Produk</p>
        <p>Ongkos Kirim</p>
        <p>Total Pembayaran</p>
      </div>
      <div class="nominal">
        <p>Rp 50.000</p>
        <p>Rp 10.000</p>
        <p class="nominal-text">Rp 60.000</p>
      </div>
    </div>
    <div class="btn-pesan">
      <button>Buat Pesanan</button>
    </div>
  </div>
</div>
@endsection