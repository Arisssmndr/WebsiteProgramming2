<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    //
    public static function getDataProduk()
    {
        $dataproduk = [
            [
                'kode_produk' => 'B01',
                'nama_produk' => 'Beng-beng',
            ],

            [
                'kode_produk' => 'B02',
                'nama_produk' => 'Better',
            ]
        ];
        return $dataproduk;
    }
}
