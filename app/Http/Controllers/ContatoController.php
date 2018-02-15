<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
  public function index()
  {
      $contatos = Contato::with(['conta', 'cargo'])->get();
      return response()->json($contatos);
  }

  public function show($id)
  {
      $contato = Contato::with(['conta', 'cargo'])->find($id);

      if (!$contato) {
          return response()->json([
              'message' => 'Record not found'
          ], 404);
      }

      return response()->json($contato);
  }
}
