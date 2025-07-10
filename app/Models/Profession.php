<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $fillable = [
        'id', 'profession', 'active', 'created_at', 'updated_at',
    ];
}
