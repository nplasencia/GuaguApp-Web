<?php

namespace App\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Commons\UserContract;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        UserContract::NAME, UserContract::EMAIL, UserContract::PASSWORD,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        UserContract::PASSWORD, 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        UserContract::EMAIL_VERIFIED => 'datetime',
        UserContract::IS_ADMIN       => 'boolean'
    ];

    public function isAdmin()
    {
        return $this->is_admin;
    }
}
