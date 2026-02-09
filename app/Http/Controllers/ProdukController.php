<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function index () {

        $dataproduk = Produk::getProduk();
        //dd ($dataproduk);
        return view ('produk.index',['nama' => 'Aris Munandar', 'title2' => 'Produkkk'], compact( 'dataproduk'));
    }
        public function create () {
        echo "Ini Halman Proses Simpan";
    }
        public function store () {
        echo "Ini Halman Indek Produk";
    }
}
