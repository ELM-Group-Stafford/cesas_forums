<?php

namespace App\Helpers;

//use App\Models\Country;
//use App\Models\Countryables;
//use App\Models\Region;
//use App\Models\Regionables;
use App\Models\UserSpeciality;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class userSpecialityHelper
{
    public function all()
    {
        $ret_array = array();
        $sort_order = array();

        // $userSpecialities = UserSpeciality::select('id', 'sort_order', 'name')->orderBy('sort_order', 'asc')->where('is_active', '1')->get()->toArray();
        $userSpecialities = UserSpeciality::orderBy('pinned', 'desc')->orderBy('sort_order', 'asc')->where('is_active', '1')->get();

        // foreach ($userSpecialities as $userSpeciality) {
        //     $ret_array[$userSpeciality['id']] = $userSpeciality['name'];
        //     $sort_order[$userSpeciality['sort_order']] = $userSpeciality['id'];
        // }
        // krsort($sort_order);
        // $first_element = array_slice($sort_order, 0, 1);
        // $ret_array[0] = $first_element[0];


        // return $ret_array;
        return $userSpecialities;
    }

    /**
     * Get an array of available region keys.
     */
    public function keys(): array
    {
        return array_keys($this->all()->toArray());
    }
}
