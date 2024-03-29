<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'fname', 'surname', 'email', 'phone', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function assignRole($role)
    {
        $this->roles()->save(
                Role::whereName($role)->firstOrFail
            );
    }


    public function hasRole($role)
    {
        if(is_string($role)){ //if a string is referenced
            return $this->roles->contains('name', $role);
        }

        //if a collection of roles is referenced
        return (bool) $role->intersect($this->roles)->count();
    }
}
