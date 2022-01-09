<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;

class testController extends Controller
{
    public function agregar(){

        return Product::all();

    }
}
