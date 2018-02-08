<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
