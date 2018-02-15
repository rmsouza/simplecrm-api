<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoAcao;

class TipoAcaoController extends Controller
{
  public function index()
  {
      $tipos = TipoAcao::get();
      return response()->json($tipos);
  }

  public function show($id)
  {
      $tipo = TipoAcao::find($id);

      if (!$tipo) {
          return response()->json([
              'message' => 'Record not found'
          ], 404);
      }

      return response()->json($tipo);
  }
}
