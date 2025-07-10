<?php

namespace App\View\Components;

use App\Helpers\SpecialitiesHelper;
use Illuminate\View\Component;
use App\Models\Config;

class SpecialityFilterRegister extends Component
{
    public $availableSpecialities;
    public $speciality_area_array;
    public $selectedSpecialities;
    public $availableSpecialityCountArray;
    public $title_array;
    public $title;
    public $displaySpeciality;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $params = SpecialitiesHelper::all();
        $this->availableSpecialities = $params['availableSpecialities'];
        $this->speciality_area_array = $params['speciality_area_array'];
        $this->selectedSpecialities = $params['selectedSpecialities'];
        $this->availableSpecialityCountArray = $params['speciality_area_count_array'];
        $this->title_array = $params['title_array'];
        $this->title = $params['title'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        
            return view('components.speciality-filter-register');
        
    }
}
