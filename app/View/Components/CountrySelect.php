<?php

namespace App\View\Components;

use App\Helpers\CountriesHelper;
use Illuminate\View\Component;

class CountrySelect extends Component
{
    protected $countries;
    protected $value;

    /**
     * Create a new component instance.
     *
     * @param CountriesHelper $countriesHelper
     * @param null|mixed $value
     */
    public function __construct(CountriesHelper $countriesHelper, $value = null)
    {
        $this->countries = $countriesHelper->all();
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Closure|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.country-select', [
            'countries' => $this->countries,
            'value' => $this->value,
        ]);
    }
}
