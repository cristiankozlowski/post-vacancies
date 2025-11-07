<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'mode',
        'type',
        'salary',
        'location',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
