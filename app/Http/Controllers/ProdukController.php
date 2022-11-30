<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
  public function index()
  {
    return view('pages.produk');
  }

  public function detail($id)
  {
    return view('pages.produkDetail');
  }

  public function kategori($id)
  {
    return view('pages.kategoriDetail');
  }
}
