<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'users';
    protected $fillable =[
        'first_name',
        'last_name',
        'username',
        'password',
        'gender',
        'phoneNumber',
        'email'
    ];
    use HasFactory;
    public $timestamps = false;
}
