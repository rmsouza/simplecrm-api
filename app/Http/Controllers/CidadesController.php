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

    public function store(Request $request)
    {
        $cidade = new Cidade();
        $cidade->fill($request->all());
        $cidade->save();

        return response()->json($cidade, 201);
    }

    public function update(Request $request, $id)
    {
        $cidade = Cidade::find($id);

        if(!$cidade) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $cidade->fill($request->all());
        $cidade->save();

        return response()->json($cidade);
    }

    public function destroy($id)
    {
        $cidade = Cidade::find($id);

        if (!$cidade) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $cidade->delete();
    }
}
