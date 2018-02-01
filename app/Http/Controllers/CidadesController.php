<?php

namespace App\Http\Controllers;

use App\Cidade;
use Illuminate\Http\Request;

class CidadesController extends Controller
{
    public function index()
    {
        $cidades = Cidade::with('uf')->get();
        return response()->json($cidades);
    }

    public function show($id)
    {
        $cidade = Cidade::with('uf')->find($id);

        if (!$cidade) {
            return response()->json([
                'message' => 'Record not found'
            ], 404);
        }

        return response()->json($cidade);
    }
}
