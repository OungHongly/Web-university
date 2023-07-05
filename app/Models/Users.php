<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/*class Users extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'users';
    protected $fillable =[
        'user_id',
        'first_name',
        'last_name',
        'username',
        'password',
        'gender',
        'phoneNumber',
        'email',
        'role_id',
        'createdAt',
        'updatedAt'
    ];
}*/
class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //public $timestamps = false;
    protected $table = 'users';
    protected $fillable =[
        'user_id',
        'first_name',
        'last_name',
        'username',
        'password',
        'gender',
        'phoneNumber',
        'email',
        'role_id',
        'createdAt',
        'updatedAt'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
