<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cidade extends Model
{
    use SoftDeletes;

    protected $table = 'cidade';

    protected $fillable = ['nome', 'uf_id'];

    protected $dates = ['deleted_at'];

    public function uf()
    {
        return $this->belongsTo('App\Uf');
    }
}
