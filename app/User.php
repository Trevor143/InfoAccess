<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'isAdmin','approved_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(){
        return $this->isAdmin;
    }

    public function opportunity(){
        return $this->hasMany('App\Opportunity');
    }

    public function profile(){
        if(auth()->user()->isAdmin == 1){
            return $this->hasOne('App\TIPOProfile');
        }
        elseif(auth()->user()->isAdmin == 2 ){
            return $this->hasOne('App\SMEProfile');
        }else{
            return $this->hasOne('App\AdminProfile');
        }
    }

}
