<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
        }
    public function about() {
        return "2141720198, Nabilah Amaalina Syafa";
        }
    public function articles($id) {
        return "Halaman Artikel dengan Id " .$id;
        }
}
