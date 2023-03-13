<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\View;

class ProductsController extends Controller
{
    function product(){
        return view('products');

    }
    // function product1(){
    //     return view('products');
    // }
    // Route::prefix('products')->group(function () {
    //     Route::get('category/marbel-edu-games', function () {
    //         return redirect('https://www.educastudio.com/category/marbel-edu-games');
    //         // echo'<iframe src="https://www.educastudio.com/category/marbel-edu-games" style="width:100vw; height:100vh"></iframe>';
    //     });
    //     Route::get('category/marbel-and-friends-kids-games', function () {
    //         return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    //     });
    
    //     Route::get('category/riri-story-books-animations', function () {
    //         return redirect('https://www.educastudio.com/category/riri-story-books-animations');
    //     });
    
    //     Route::get('category/kolak-kids-songs', function () {
    //         return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    //     });
    // });
}
