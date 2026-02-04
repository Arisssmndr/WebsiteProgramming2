<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    //
    public function index () {
        $data['title'] = "Halaman Pelanggan";
        $data['nama_barang'] = "Beng-beng";
        return view ('pelanggan.index', $data);
    }
}
