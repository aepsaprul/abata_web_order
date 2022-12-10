<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
  public function cart()
  {
    return view('pages.cart');
  }
  public function checkout()
  {
    $header_title = "checkout";
    return view('pages.checkout', ['header_title' => $header_title]);
  }
  public function invoice()
  {
    $header_title = "invoice";
    return view('pages.invoice', ['header_title' => $header_title]);
  }
}
