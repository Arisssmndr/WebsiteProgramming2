<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    //
        public function index () {
        $customers = Customers::GetAllCustomers();
        //dd ($customers);
        return view ('customers.index', compact('customers'));
    }
        public function create () {
        echo "Ini Halman Proses Simpan";
    }
        public function store () {
        echo "Ini Halman Indek Produk";
    }
}
