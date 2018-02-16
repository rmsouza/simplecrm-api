<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {

        if (empty($request->query('funcao'))) {
            $usuarios = Usuario::get();
        } else {
            $usuarios = Usuario::where('funcao', $request->query('funcao'))->get();
        }

        return response()->json($usuarios);
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);

        if (!$usuario) {
            return response()->json([
                'message' => 'Record not found'
            ], 404);
        }

        return response()->json($usuario);
    }

}
