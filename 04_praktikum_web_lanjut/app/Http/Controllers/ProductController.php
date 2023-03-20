<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function tampil(){
        return view('product',['product' => product::tampil()]);
    }
}
