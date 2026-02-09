<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
        public function index () {
        $categories = Category::GetAll();
        return view ('categories.index', compact('categories'));
    }
        public function create () {
        return view ('/categories/create');
    }
        public function store (Request $request) {
            $data = [
                'category_name' => $request->category_name
            ];
            
            $store = Category::store($data);
            if($store){
                echo "Data berhasil di simpan";
            } else {
                echo "Data gagal di simpan";
            }

    }

}
