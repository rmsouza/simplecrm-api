<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uf extends Model
{
    protected $table = 'uf';

    protected $fillable = ['nome'];

    protected $dates = ['deleted_at'];

    public function cidades()
    {
        return $this->hasMany('App\Cidade');
    }
}
