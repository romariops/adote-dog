<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function cadastra(){
        return view('/cadastre-se');
    }

    public function store(Request $request){
        $usuario = new Usuario;

        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = $request->senha;

        $usuario->save();

        return redirect('/')->with('msg', 'Agora você faz parte da nossa familia!');
    }
}
