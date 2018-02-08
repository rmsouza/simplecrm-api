<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract, JWTSubject
{
    use SoftDeletes, Notifiable, Authenticatable, CanResetPassword;

    protected $table = 'usuario';

    protected $fillable = ['nome', 'sobrenome', 'email', 'telefone', 'funcao', 'status', 'senha'];

    protected $hidden = ['senha'];

    protected $dates = ['deleted_at'];

    public function convocacoes()
    {
        return $this->hasMany('App\Convocacao');
    }

    public function contas()
    {
        return $this->hasMany('App\Conta');
    }

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
