<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
        public function index(Request $request) {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

        public function create() {
            $categories = Produk::GetCatt();
            return view('/produk/create', compact('categories'));
        }

       public function store(Request $request) {
        $request->validate([
            'category_id' => 'required',
            'products_code' => 'required|max:6',
            'products_name' => 'required',
            'unit' => 'required',
            'price' => 'required|numeric'
        ],[
            'products_name.required' => 'Product Wajib Diisi!',
            'price.required' => 'Harga Wajib Angka!',
            'price.required' => 'Harga Wajib diisi!',
            'price.numeric' => 'Harga Wajib Angka!',
        ]);

        $data = [
            'category_id' => $request->category_id,
            'products_code' => $request->products_code,
            'products_name' => $request->products_name,
            'unit' => $request->unit,
            'price' => $request->price,
        ];

        $store = Produk::store($data);
        if ($store) {
            return Redirect('/produk')->with('success', 'Data berhasil di Simpan!');
        } else {
            return Redirect('/produk')->with('erorr', 'Data berhasil di Simpan!');
        }
    }

    public function update ($id) {
        $categories = Produk::GetCatt();
        $produk = Produk::getCategoribyID($id);
        return view ('produk.update', compact('categories','produk' ));
    }


    public function edit($id, Request $request) {
        $data = [
            'category_id' => $request->category_id,
            'products_code' => $request->products_code,
            'products_name' => $request->products_name,
            'unit' => $request->unit,
            'price' => $request->price,
        ];

        $store = Produk::edit($data, $id);
        if ($store) {
            return Redirect('/produk')->with('success', 'Data berhasil di Edit!');
        } else {
            return Redirect('/produk')->with('erorr', 'Data gagal di Edit!');
        }
    }

    public function destroy ($id) {
        $produk = Produk::deleteData ($id);
        if ($produk) {
            return redirect('/produk')->with('success', 'Data berhasil di Hapus!');
        } else {
                return redirect('/produk')->with('erorr', 'Data gagal di Hapus!');
        }

    }
}
