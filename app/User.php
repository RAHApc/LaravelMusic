<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const TYPE_ADMIN='admin';
    const TYPE_USER='user';

   const TYPES=[
        self::TYPE_ADMIN,
        self::TYPE_USER
        ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole($role)
    {
        if(is_string($role)) {
            return $this->roles->contains('name' , $role);
        }
//
//        foreach ($role as $r) {
//            if($this->hasRole($r->name)) {
//                return true;
//            }
//        }
//        return false;

        return !! $role->intersect($this->roles)->count();
    }
}
