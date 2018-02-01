<?php

namespace App\Http\Controllers;

use App\Uf;
use Illuminate\Http\Request;

class UfsController extends Controller
{
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
}
