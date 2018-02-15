<?php

namespace App\Http\Controllers;

use App\Oportunidade;
use Illuminate\Http\Request;

class OportunidadeController extends Controller
{
    public function index()
    {
        $oportunidades = Oportunidade::with(['fasevenda', 'conta'])->get();
        return response()->json($oportunidades);
    }

    public function show($id)
    {
        $oportunidade = Oportunidade::with(['fasevenda', 'conta'])->find($id);

        if (!$oportunidade) {
            return response()->json([
                'message' => 'Record not found'
            ], 404);
        }

        return response()->json($oportunidade);
    }

    public function store(Request $request)
    {
        $oportunidade = new Oportunidade();
        $oportunidade->fill($request->all());
        $oportunidade->save();

        return response()->json($oportunidade, 201);
    }

    public function update(Request $request, $id)
    {
        $oportunidade = Oportunidade::find($id);

        if(!$oportunidade) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $oportunidade->fill($request->all());
        $oportunidade->save();

        return response()->json($oportunidade);
    }

    public function destroy($id)
    {
        $oportunidade = Oportunidade::find($id);

        if (!$oportunidade) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $oportunidade->delete();
    }
}
