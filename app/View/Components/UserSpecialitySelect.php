<?php

namespace App\View\Components;

use App\Helpers\UserSpecialityHelper;
use Illuminate\View\Component;

class UserSpecialitySelect extends Component
{
    protected $user_specialities;
    protected $value;

    /**
     * Create a new component instance.
     *
     * @param UserSpecialityHelper $countriesHelper
     * @param null|mixed $value
     */
    public function __construct(userSpecialityHelper $userSpecialityHelper, $value = null)
    {
        $this->user_specialities = $userSpecialityHelper->all();
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Closure|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.user-speciality-select', [
            'specialities' => $this->user_specialities,
            'value' => $this->value,
        ]);
    }
}
