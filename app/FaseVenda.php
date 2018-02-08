<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaseVenda extends Model
{
    use SoftDeletes;

    protected $table = 'fasevenda';

    protected $fillable = ['nome'];

    protected $dates = ['deleted_at'];

    public function oportunidades()
    {
        return $this->hasMany('App\Oportunidade');
    }
}
