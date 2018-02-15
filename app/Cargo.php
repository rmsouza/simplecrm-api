<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cargo extends Model
{
    use SoftDeletes;

    protected $table = 'cargo';

    protected $fillable = ['nome'];

    protected $dates = ['deleted_at'];

    public function contatos()
    {
        return $this->hasMany('App\Contato');
    }
}
