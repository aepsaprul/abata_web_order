@extends('layouts.appdua')

@section('content')
{{-- conntent --}}
<div class="appdua-wrapper">
  <div class="invoice">
    <div class="invoice-container">
      <div class="bayar">
        <p>Total Pembayaran</p>
        <p>Rp 60.000</p>
      </div>
      <div class="tempo">
        <p>Maksimal Bayar</p>
        <p>30 Desember 2022 - 12:00</p>
      </div>
      <div class="bank">
        <div><img src="{{ asset('assets/bca.png') }}" alt=""></div>
        <div><p>No. Rekening:</p></div>
        <div><span>126 0813 2663 0693</span> <a href="#">salin</a></div>
      </div>
      <div class="btn">
        <button>ok</button>
      </div>
    </div>
  </div>
</div>
@endsection