<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiseaseAreaables extends Model
{
    protected $fillable = [
        'disease_area_id', 'disease_areaable_id', 'disease_areaable_type', 'review_at', 'expires_at', 'created_at', 'updated_at',
    ];
}
