<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MlController extends Controller
{
    function index(){
        $harga = number_format(27500,0,',','.');

        $data = [
            'harga' => $harga
        ];
        return view('dashboard', $data);
    }
}
