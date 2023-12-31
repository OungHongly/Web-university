<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    protected $table = 'exams';
    public $timestamps = false;
    protected $fillable = [
        'examid',
        'papercode',
        'subject',
        'course',
        'date',
        'starttime',
        'endtime'
    ];

    use HasFactory;
}
