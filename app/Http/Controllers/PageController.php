<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return 'Nim : 2241720069' . '<br>' . 'Nama : Icha Dewi Putriana';
    }

    public function  articles($id){
        return 'Halaman Artikel dengan ID '. $id;  
    }
}
