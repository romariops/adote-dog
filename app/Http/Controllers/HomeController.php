<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class HomeController extends Controller
{
    public function index(){
        $dogs = Dog::all();
        return view('home',['dogs'=>$dogs]);
    }
}
