<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntraController extends Controller
{
    public function entrar(){
        return view('entrar');
    }
}
