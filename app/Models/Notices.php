<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notices extends Model
{
    protected $table ='Notices';
    public $timestamps = false;

    protected $fillable=[
        'noticeId',
        'date',
        'event'
    ];

    use HasFactory;
}
