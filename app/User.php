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
        'username', 'email', 'password', 'venue', 'city'];

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

    public function genres()
    {
        return $this->hasMany(userfav::class);
    }
    public function userimg()
    {
        return $this->hasOne(venueImage::class);
    }

    public function venues()
    {
        return $this->hasMany(venuefav::class);
    }

    public function posts()
    {
        return $this->hasMany(venuepost::class);
    }
}
