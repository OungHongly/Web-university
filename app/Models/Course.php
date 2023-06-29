<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table ='courses';
    public $timestamps = false;

    protected $fillable = [
        'course_id',
        'course_name'
    ];

    use HasFactory;

}
