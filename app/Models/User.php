<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;

class User extends Authenticatable
{
    use LaratrustUserTrait;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'address',
        'gender',
        'UserJob',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',

    ]; // end of hidden

    function getFirstNameAttribute($val)
    {
        return ucfirst($val);

    } // end of get first name

    public function getLastNameAttribute($val)
    {
        return ucfirst($val);
        
    } // end of get last name

    protected $casts = [
        'email_verified_at' => 'datetime',

    ]; // end of casts
}
