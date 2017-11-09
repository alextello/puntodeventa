<?php

namespace PuntoVenta;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Cartalyst\Sentinel\Users\EloquentUser as CartalystUser;
use Illuminate\Database\Eloquent\softDeletes;

class User extends CartalystUser
{
    use Notifiable;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
          'email',
          'username', /* i added this */
          'password',
          'last_name',
          'first_name',
          'permissions',
      ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($val){
         $this->attributes['password'] = trim($val) !== '' ? $val : null;
    }
}
