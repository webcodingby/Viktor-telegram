<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $table = 'submissions';

    protected $fillabel = [
        'name',
        'email',
        'phone'
    ];

    protected $cats = [
        'created_at',
        'updated_at'
    ];
}
