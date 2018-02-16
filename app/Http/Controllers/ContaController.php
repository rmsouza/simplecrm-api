<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conta;
use JWTAuth;

class ContaController extends Controller
{
  public function index()
  {
      $userData = JWTAuth::parseToken()->authenticate()->toArray();

      if ($userData['funcao'] === 'Gerente de Contas') {
        $contas = Conta::with(['usuario', 'cidade'])
          ->where('usuario_id', $userData['id'])
          ->get();
      } else {
        $contas = Conta::with(['usuario', 'cidade'])->get();
      }

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
