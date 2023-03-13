<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    // function news(){
    //     return view('news');
    // }
    public function news($id=1){
        return view('news');
    }

}
