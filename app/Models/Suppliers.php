<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    //kode untuk jangan isi manual atau sembarangan field data ini
    protected $guarded = ['id'];

    // ini buat tabel yang beda dengan nama model kalo pakai eloquen
    // protected $table = 'suppliers';

}
