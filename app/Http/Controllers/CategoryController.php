<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    //
    public function index(Request $request) {
        //all() eloquen untuk tampilkan semua data sesuai tabel
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create() {
        return view('/categories/create');
    }

    public function store(Request $request) {
        $data = [
            'category_name' => $request->category_name
        ];

        //create eloquen untuk simpan semua data sesuai tabel
        $store = Category::create($data);
        if ($store) {
            return Redirect('/categories');
        } else {
            return Redirect('/categories');
        }
    }

    //find eloquen untuk tampilkan data sesuai id
    public function update($id) {
        $category = Category::find($id);
        return view('categories.update', compact('category'));
    }

    public function edit(Request $request, $id) {
        $data = [
            'category_name' => $request->category_name
        ];

        $products = Category::find($id);
        $update = $products->update($data);
        if ($update) {
            return Redirect('/categories');
        } else {
            return Redirect('/categories');
        }
    }

    public function destroy($id) {
        $products = Category::find($id);
        $delete = $products->delete();
        if ($delete) {
            return Redirect('/categories');
        } else {
            return Redirect('/categories');
        }
    }
}
