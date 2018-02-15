<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Telefone extends Model
{
    use SoftDeletes;

    protected $table = 'telefone';

    protected $fillable = ['nome'];

    protected $dates = ['deleted_at'];

    public function contato()
    {
        return $this->belongsTo('App\Contato');
    }
}
