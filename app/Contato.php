<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contato extends Model
{
    use SoftDeletes;

    protected $table = 'contato';

    protected $fillable = ['email', 'nome', 'sobrenome', 'nivelInfluencia', 'conta_id', 'cargo_id'];

    protected $dates = ['deleted_at'];

    public function conta()
    {
        return $this->belongsTo('App\Conta');
    }

    public function cargo()
    {
        return $this->belongsTo('App\Cargo');
    }

    public function telefones()
    {
        return $this->hasMany('App\Telefone');
    }

    public function acoes()
    {
        return $this->hasMany('App\Acao');
    }
}
