<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurhatanController extends Controller
{
    public function index(){
        return view('curhat');
    }
}
