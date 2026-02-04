<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function index () {
        $title = "Produk";
        $dataproduk = Produk::getDataProduk();
        //dd ($dataproduk);
        return view ('produk.index', compact('title', 'dataproduk'));
    }
        public function create () {
        echo "Ini Halman Proses Simpan";
    }
        public function store () {
        echo "Ini Halman Indek Produk";
    }
}
