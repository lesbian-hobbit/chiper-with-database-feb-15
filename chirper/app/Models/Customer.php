<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function index()
    {
        //return 'Customers';

        $data = Customer::all();
        return view('customer.index',['customers'=>$data]);

    }
}
