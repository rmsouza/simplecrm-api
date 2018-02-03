<?php

namespace App\Http\Controllers;

use App\Uf;
use Illuminate\Http\Request;
use App\Http\Requests\UfRequest;

class UfsController extends Controller
{
    public function __construct() {
        // $this->middleware('auth', ['except' => ['show']]);
    }

    public function index()
    {
        $ufs = Uf::get();
        return response()->json($ufs);
    }

    public function show($id)
    {
        $uf = Uf::find($id);

        if(!$uf) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        return response()->json($uf);
    }

    public function store(UfRequest $request)
    {
        $uf = new Uf();
        $uf->fill($request->all());
        $uf->save();

        return response()->json($uf, 201);
    }

    public function update(UfRequest $request, $id)
    {
        $uf = Uf::find($id);

        if(!$uf) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $uf->fill($request->all());
        $uf->save();

        return response()->json($uf);
    }

    public function destroy($id)
    {
        $uf = Uf::find($id);

        if (!$uf) {
            return response()->json([
                'message'   => 'Record not found',
            ], 404);
        }

        $uf->delete();
    }
}
