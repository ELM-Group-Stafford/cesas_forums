<?php

namespace App\View\Components;

use App\Helpers\ProfessionsHelper;
use Illuminate\View\Component;

class ProfessionSelect extends Component
{
    protected $professions;
    protected $value;

    /**
     * Create a new component instance.
     *
     * @param CountriesHelper $countriesHelper
     * @param null|mixed $value
     */
    public function __construct(ProfessionsHelper $professionsHelper, $value = null)
    {
        $this->professions = $professionsHelper->all();
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Closure|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.profession-select', [
            'professions' => $this->professions,
            'value' => $this->value,
        ]);
    }
}
