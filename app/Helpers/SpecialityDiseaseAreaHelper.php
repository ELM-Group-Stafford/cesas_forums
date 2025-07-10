<?php

namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class SpecialityDiseaseAreaHelper
{
    public static function getAvailableSpecialities()
    {
        $list_specialities = DB::table('specialities as s')
            ->leftJoin('disease_areas as d', 's.id', '=', 'd.speciality_id')
            ->select('d.id AS area_id', 's.id AS speciality_id', 's.speciality_name', 'd.area_name')
            ->where('s.active', '=', 1)
		    ->where('d.active', '=', 1)        
		    ->orderBy('s.sort_order')
            ->orderBy('d.area_name')
		    ->get();
        return collect($list_specialities);
    }

    public static function getAreasForSpeciality(){
        $speciality_areas = DB::table('disease_areas')        
            ->select('speciality_id', 'id')
            ->where('active', '=', 1)
            ->orderBy('speciality_id')->get();

        $speciality_area_array = [];
        
        foreach($speciality_areas as $val){
            $speciality_area_array[$val->speciality_id][] = $val->id; 
        }
        return collect($speciality_area_array);
    }

    public static function listAreasForSpeciality(){
        $old_speciality_id = '';
        $disease_id_list = '';

        $list_specialities = DB::table('specialities as s')
            ->leftJoin('disease_areas as d', 's.id', '=', 'd.speciality_id')
            ->select('s.id AS speciality_id',  's.speciality_name', 'd.id AS disease_id')
            ->where('s.active', '=', 1)
            ->where('s.display_homepage_button', '=', 1)
		    ->where('d.active', '=', 1)        
		    ->orderBy('s.sort_order')
            ->orderBy('d.area_name')
		    ->get();

        $speciality_area_array = [];       
        foreach($list_specialities as $val){
            if($old_speciality_id <> $val->speciality_id){
                $old_speciality_id = $val->speciality_id;
                $disease_id_list = $val->speciality_id.'_'.$val->speciality_name;
            }    
            $disease_id_list = $disease_id_list.'_'.$val->disease_id; ;
            $speciality_area_array[$val->speciality_id] = $disease_id_list;             
        }
        //return collect($speciality_area_array);
        return $speciality_area_array;
    }

    public static function getAreaCountForSpeciality(){
        $speciality_area_count = DB::table('disease_areas as d')        
            ->Join('specialities as s', 'd.speciality_id', '=', 's.id')
            ->select('s.id as speciality_id', DB::raw('count(*) as id_count'))
            ->groupBy('s.id')
            ->where('d.active', '=', 1)
            ->where('s.active', '=', 1)
            ->orderBy('s.id')->get();

        foreach($speciality_area_count as $val){
            $speciality_area_count_array[$val->speciality_id] = $val->id_count; 
        }

        return $speciality_area_count_array;
    }

    public static function getAvailableDiseaseAreas()
    {
        $disease_areas = DB::table('disease_areas')->where('active', '=', 1)->orderBy('area_name', 'asc')->get();
        
        foreach($disease_areas as $val){
            $disease_area[$val->speciality_id][$val->id]["id"] = $val->id;
            $disease_area[$val->speciality_id][$val->id]["speciality_id"] = $val->speciality_id;
            $disease_area[$val->speciality_id][$val->id]["area_name"] = $val->area_name; 
        }
        ksort($disease_area);
        return collect($disease_area);
    }
}
