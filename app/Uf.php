<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Uf extends Model
{
    use SoftDeletes;

    protected $table = 'uf';

    protected $fillable = ['nome'];

    protected $dates = ['deleted_at'];

    public function cidades()
    {
        return $this->hasMany('App\Cidade');
    }
}
