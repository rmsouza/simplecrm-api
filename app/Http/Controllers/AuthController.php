<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Usuario;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthenticateRequest;
use JWTAuth;
use Hash;

class AuthController extends Controller
{
    public function authenticate(AuthenticateRequest $request) {
      $credentials = $request->only('email', 'senha');

      $usuario = Usuario::where('email', $credentials['email'])->first();

      if(!$usuario) {
        return response()->json([
          'error' => 'Invalid credentials'
        ], 401);
      }

      if (!Hash::check($credentials['senha'], $usuario->senha)) {
          return response()->json([
            'error' => 'Invalid credentials'
          ], 401);
      }

      $token = JWTAuth::fromUser($usuario);

      // // Get expiration time
      // $objectToken = JWTAuth::setToken($token);
      // $expiration = JWTAuth::decode($objectToken->getToken())->get('exp');

      return response()->json([
        'access_token' => $token,
        'token_type' => 'bearer'
      ]);
    }
}
