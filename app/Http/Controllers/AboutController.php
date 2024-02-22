<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return 'Nim : 2241720069' . '<br>' . 'Nama : Icha Dewi Putriana';
    }
}
