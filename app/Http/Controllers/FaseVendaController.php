<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FaseVenda;

class FaseVendaController extends Controller
{
  public function index()
  {
      $fases = FaseVenda::get();
      return response()->json($fases);
  }

  public function show($id)
  {
      $fase = FaseVenda::find($id);

      if (!$fase) {
          return response()->json([
              'message' => 'Record not found'
          ], 404);
      }

      return response()->json($fase);
  }
}
