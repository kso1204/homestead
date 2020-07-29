<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $dates = ['last_login'];
    

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function articles(){
        return $this->hasMany(Article::class);
    }

    public function isAdmin(){
        return ($this->id===1) ? true : false;
    }
    
    public function votes(){
        return $this->hasMany(Vote::class);
    }

    
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'confirm_code','activated','name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'confirm_code','password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'activated' => 'boolean',
    ];
}
