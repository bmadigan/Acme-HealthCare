<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $casts = [
        'date_of_birth' => 'date'
    ];

    public function doctor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
