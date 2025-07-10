<?php

namespace App\Helpers;

use App\Models\Profession;

class ProfessionsHelper
{
    public function all()
    {

        $professionArray = array();
        $professions = Profession::all();

        foreach($professions AS $profession){
            $professionArray[$profession->id] = $profession->profession;
        }
        return $professionArray;
    }

    /**
     * Get an array of available country keys.
     */
    public function keys(): array
    {
        return array_keys($this->all());
    }
}
