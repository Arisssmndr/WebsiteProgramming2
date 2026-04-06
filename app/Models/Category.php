<?php

namespace App\Models;

use GuzzleHttp\Psr7\Query;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    //

    // public static function GetAll($request){
    //     $query = DB::table('categories');
    //     if (!empty($request->category_name) && !empty($request->category_id)) {
    //         $query->where('category_name', 'like', '%'.$request->category_name. '%' . 'category_id', 'like', '%'.$request->category_id. '%');
    //     }
    //     //$categories = DB::table('categories')->get();
    //     $categories = $query->get();
    //     return $categories;
    // }

    // public static function store($data){
    //     return DB::table('categories')->insert($data);
    // }

    // public static function getCategoribyID($id) {
    //     $categories = DB::table('categories')
    //     ->where('id', $id)
    //     ->first();
    //     return $categories;
    // }

    protected $fillable = ['category_name'];

    // public static function edit($data, $id) {
    //     $categories = DB::table('categories')
    //     ->where('id', $id)
    //     ->update($data);
    //     return $categories;
    // }

    // public static function deleteData ($id) {
    //     return DB::table('categories')->where('id', $id)->delete();
    // }

}
