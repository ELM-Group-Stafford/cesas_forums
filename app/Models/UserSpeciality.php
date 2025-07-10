<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class UserSpeciality extends Model implements Sortable
{
    use SortableTrait;

    public static $defaultOrderField = 'sort_order';

    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
    ];

    protected $fillable = [
        'name', 'comment', 'pinned', 'is_active', 'created_at', 'updated_at',
    ];
}
