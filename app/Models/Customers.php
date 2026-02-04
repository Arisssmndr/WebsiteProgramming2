<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customers extends Model
{
    //
    public static function GetAllCustomers(){
        $customers = DB::table('customers')->get();
        return $customers;

    }
}
