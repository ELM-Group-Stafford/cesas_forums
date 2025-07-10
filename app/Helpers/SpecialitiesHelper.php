<?php

namespace App\Helpers;

use App\Helpers\SpecialityDiseaseAreaHelper;
use App\Http\Controllers\DiseaseAreaablesController;
use Illuminate\Support\Facades\Auth;

class SpecialitiesHelper
{
    public static function all()
    {
        $cookie_contents = [];
        $cookie_contents_server = [];
        $title = trans('podcasts.specialities');
        if (isset($_COOKIE['disease_area_client']) && $_COOKIE['disease_area_client'] <> '[]' && !is_null($_COOKIE['disease_area_client'])) {
            $cookie_contents = json_decode($_COOKIE['disease_area_client']);
            $title = trans('podcasts.filtered');
            sort($cookie_contents);
        }        
        if (isset($_COOKIE['disease_area_server']) && $_COOKIE['disease_area_server'] <> '[]' && !is_null($_COOKIE['disease_area_server'])) {
            $cookie_contents_server = json_decode($_COOKIE['disease_area_server']);
            $cookie_contents = array_unique(array_merge($cookie_contents, $cookie_contents_server), SORT_REGULAR);
            sort($cookie_contents);
            $title = trans('podcasts.filtered');
        }
        $title_array[] = trans('general.specialities');
        $title_array[] = trans('general.filtered');
        $availableSpecialities = SpecialityDiseaseAreaHelper::getAvailableSpecialities();
        $areasForSpeciality = SpecialityDiseaseAreaHelper::getAreasForSpeciality();
        $areaCountForSpeciality = SpecialityDiseaseAreaHelper::getAreaCountForSpeciality();        
        $selectedSpecialityCount = (new DiseaseAreaablesController)->get_speciality_count(Auth::id());
        $params['availableSpecialities'] = $availableSpecialities;
        $params['speciality_area_array'] = $areasForSpeciality;
        $params['speciality_area_count_array'] = $areaCountForSpeciality;
        $params['selected_speciality_count_array'] = $selectedSpecialityCount;
        $params['selectedSpecialitiesServer'] = (new DiseaseAreaablesController)->get_disease_areas(Auth::id());
        $params['selectedSpecialities'] = $cookie_contents;
        $params['title_array'] = json_encode($title_array);
        $params['title'] = $title;

        return $params;
    }

    /**
     * Get an array of available speciality keys.
     */
    public function keys(): array
    {
        return array_keys($this->all());
    }
}
