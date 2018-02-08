<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convocacao extends Model
{
    use SoftDeletes;

    protected $table = 'convocacao';

    protected $fillable = ['status', 'dataConvocacao', 'acao_id', 'usuario_id'];

    protected $dates = ['deleted_at'];

    public function acao()
    {
        return $this->belongsTo('App\Acao');
    }

    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }
}
