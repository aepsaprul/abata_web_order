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
    return view('pages.checkout');
  }
}
