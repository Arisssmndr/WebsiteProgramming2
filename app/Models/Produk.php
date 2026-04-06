<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    //
    // public static function GetAll($request){
    //     $query = DB::table('products')
    //         ->join('categories', 'products.category_id', '=', 'categories.id')
    //         ->select('products.*', 'categories.category_name as category_name'); // Ambil semua kolom produk + nama kategori

    //     // if (!empty($request->category_name) && !empty($request->category_id)) {
    //     //     $query->where('category_name', 'like', '%'.$request->category_name. '%' . 'category_id', 'like', '%'.$request->category_id. '%');
    //     // }

    //     //$produk = DB::table('products')->get();

    //     $produk = $query->get();
    //     return $produk;
    // }

    protected $guarded = ['id'];
    protected $table = 'products';


    public static function GetCatt(){
        $categories = DB::table('categories')->get();
        return $categories;
    }

    public static function store($data){
        return DB::table('products')->insert($data);
    }

    public static function getCategoribyID($id) {
        $produk = DB::table('products')
        ->where('id', $id)
        ->first();
        return $produk;
    }

    public static function edit ($data, $id) {
        $produk = DB::table('products')
        ->where('id', $id)
        ->update($data);
        return $produk;
    }

    public static function deleteData ($id) {
        $produk = DB::table('products')
        ->where('id', $id)
        ->delete();
        return $produk;
    }
}
