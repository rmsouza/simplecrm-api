<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAcao extends Model
{
    use SoftDeletes;

    protected $table = 'tipoacao';

    protected $fillable = ['nome'];

    protected $dates = ['deleted_at'];

    public function acoes()
    {
        return $this->hasMany('App\Acao');
    }
}
