<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Speciality extends Model implements Sortable
{
	use SortableTrait;

    public static $defaultOrderField = 'sort_order';
	
	public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
    ];
	
    protected $fillable = [
        'sort_order', 'speciality_name', 'display_homepage_button', 'mailjet_contact_list_id', 'active', 'created_at', 'updated_at',
    ];

    public static $specialityName = [
        'dermatology' => 1,
        'gastroenterology' => 2,
        'rheumatology' => 3,
        'other' => 4,
    ];

    public function diseasearea()
    {
        return $this->hasMany(DiseaseArea::class);
    }
}
