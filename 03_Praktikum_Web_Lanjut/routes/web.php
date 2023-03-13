<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\ContactusController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return view('hello', ['name' => 'Andi']);
//     });

//     Route::get('/home', function () {
//         return view('hello', ['name' => 'Selamat Datang']);
//     });
// // Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'home']);


Route::prefix('product')->group(function () {
    Route::get('/Games', [ProductsController::class, 'product']);
    // Route::get('/Games1', [ProductsController::class, 'product1']);
});

// Route::get('/news', [NewsController::class, 'news']);
Route::get('/news/{id?}', [NewsController::class, 'news']);

Route::prefix('programs')->group(function () {
    Route::get('/Programs', [ProgramsController::class, 'programs']);

});

Route::get('/contactus', [ContactusController::class, 'contactus']);

Route::get('/aboutus', [AboutusController::class, 'aboutus']);


//     Route::get('category/marbel-and-friends-kids-games', function () 
//     Route::get('category/riri-story-books-animations', function () 