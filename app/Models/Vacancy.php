<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'title',
        'mode',
        'type',
        'salary',
        'location',
        'description',
    ];
}
