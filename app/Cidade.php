<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = 'cidade';

    protected $fillable = ['nome', 'uf_id'];

    protected $dates = ['deleted_at'];

    public function uf()
    {
        return $this->belongsTo('App\Uf');
    }
}
