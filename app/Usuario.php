<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $fillable = ['nome', 'sobrenome', 'email', 'telefone', 'funcao', 'status', 'senha'];

    protected $hidden = ['senha'];

    protected $dates = ['deleted_at'];
}
