<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
        public function index () {
        //$title = "Produk";
        //$dataproduk = Produk::getDataProduk();

        $categories = Category::GetAll();
        //dd ($categories);
        return view ('categories.index', compact('categories'));
    }
        public function create () {
        echo "Ini Halman Proses Simpan";
    }
        public function store () {
        echo "Ini Halman Indek Produk";
    }
}
