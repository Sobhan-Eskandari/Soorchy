<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
//    use HasApiTokens;
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'avatar',
        'user_name',
        'first_name',
        'last_name',
        'email',
        'role_id',
        'password',
        'land_line',
        'mobile',
        'address',
        'zip',
        'gender',
        'occupation',
        'verified',
        'created_by',
        'updated_by',
        'email_token',
        'revisions',
        'last_seen',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
