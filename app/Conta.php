<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conta extends Model
{
    use SoftDeletes;

    protected $table = 'conta';

    protected $fillable = ['nome', 'sigla', 'site', 'endereco', 'usuario_id', 'cidade_id'];

    protected $dates = ['deleted_at'];

    public function usuario()
    {
        return $this->belongsTo('App\Usuario');
    }

    public function cidade()
    {
        return $this->belongsTo('App\Cidade');
    }

    public function informacoesti()
    {
        return $this->hasMany('App\InformacaoTI');
    }

    public function oportunidades()
    {
        return $this->hasMany('App\Oportunidade');
    }

    public function contatos()
    {
        return $this->hasManu('App\Contato');
    }
}
