<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ModeloContratacao extends Model
{
    use SoftDeletes;

    protected $table = 'modelocontratacao';

    protected $fillable = ['nome'];

    protected $dates = ['deleted_at'];

    public function informacoesti()
    {
        return $this->hasMany('App\InformacaoTI');
    }
}
