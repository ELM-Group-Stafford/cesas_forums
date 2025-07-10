<?php

namespace App\Helpers;

use App\Models\Country;

class CountriesHelper
{
    public function all()
    {

        $countryArray = array();
        $countries = Country::all();

        foreach($countries AS $country){
            $countryArray[$country->country_id] = $country->country_name;
        }
        asort($countryArray);
        return $countryArray;
    }

    /**
     * Get an array of available country keys.
     */
    public function keys(): array
    {
        return array_keys($this->all());
    }
}
