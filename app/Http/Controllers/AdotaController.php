<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdotaController extends Controller
{
    public function adota(){
        return view('quero-adotar');
    }
}
