<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'username', 'password', 'userable_id', 'userable_type', 'remember_token'];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function userable()
    {
        return $this->morphTo();
    }

    public function hasRole($userable_type = null) {

        if ($userable_type) {
            return $this->userable_type == $userable_type;
        }

        return $this->userable_type;
    }
}
