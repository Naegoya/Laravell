<?php

use  App\Http\Controllers\ContacUsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Halaman Home
Route::get('/home', function () {
    echo'Ini adalah Halaman Home';
});

//Halaman Product
Route::prefix('products')->group(function () {
    Route::get('category/marbel-edu-games', function () {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
        // echo'<iframe src="https://www.educastudio.com/category/marbel-edu-games" style="width:100vw; height:100vh"></iframe>';
    });
    Route::get('category/marbel-and-friends-kids-games', function () {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });

    Route::get('category/riri-story-books-animations', function () {
        return redirect('https://www.educastudio.com/category/riri-story-books-animations');
    });

    Route::get('category/kolak-kids-songs', function () {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

//Halaman Program
Route::prefix('programs')->group(function () {
    Route::get('karir', function () {
        return redirect('https://www.educastudio.com/program/karir');
    });
    Route::get('magang', function () {
        return redirect('https://www.educastudio.com/program/magang');
    });

    Route::get('kunjungan-industri', function () {
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});
// Halaman News
Route::get('/news',function(){
    return redirect('https://www.educastudio.com/news');
});
Route::get('news/{title}',function($title){
    return redirect('https://www.educastudio.com/news/'.$title);
});
//Halaman About Us
Route::get('/about-us', function() {
    return redirect('https://www.educastudio.com/about-us');
});

//Halaman Contac Us
Route::get('/ContacUs', [ContacUsController::class, 'ContacUs']);