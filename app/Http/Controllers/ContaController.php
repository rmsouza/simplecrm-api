<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
  public function index()
  {
      $contas = Conta::with(['usuario', 'cidade'])->get();
      return response()->json($contas);
  }

  public function show($id)
  {
      $conta = Conta::with(['usuario', 'cidade'])->find($id);

      if (!$conta) {
          return response()->json([
              'message' => 'Record not found'
          ], 404);
      }

      return response()->json($conta);
  }
}
