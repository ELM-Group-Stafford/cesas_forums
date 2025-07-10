<?php

namespace App\Http\Controllers;

use App\Helpers\SpecialitiesHelper;
use App\Models\User;
use App\Models\DiseaseAreaables;
use App\Models\Config;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Cookie;
use Illuminate\Support\Facades\Redirect;

class DiseaseAreaablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user, $disease) // Create disease areaable record on user registration and account settings and write to disease_area_server cookie
    {
      	if($user && $disease){
			$this->delete_cookie();
        	foreach($disease as $key => $val){
          		DiseaseAreaables::create([
	              	'disease_area_id' => $key,
              		'disease_areaable_id' => $user->id,
              		'disease_areaable_type' => 'App\\Models\\User',
            		'created_at' => now(),
	            	'updated_at' => now(),
          		]);
            	$selected_areas[] = (string) $key;
        	}
        	$this->write_cookie($selected_areas);
      	}
    }
	
	public function create_from_json(Request $request) // Create disease areaable record from homepage speciality buttons and write to disease_area_server cookie
    {
		$this->authorize('create_from_json', DiseaseAreaables::class);

		$diseases = $request->keys();
		$disease_ids = explode('_', $diseases[0]);
		$cookie_contents_server = isset($_COOKIE['disease_area_server']) ? json_decode($_COOKIE['disease_area_server']) : [];

		foreach($disease_ids as $val){

			$existingDiseaseAreaable = DiseaseAreaables::where('disease_area_id', '=', $val)
				->where('disease_area_id', '=', $val)
				->where('disease_areaable_id', '=', Auth::id())
				->where('disease_areaable_type', '=', 'App\\Models\\User')
				->first();

			if ($existingDiseaseAreaable) {
				
				$existingDiseaseAreaable->delete();

				$cookie_contents_server = array_diff($cookie_contents_server, [$val]);

			} else {

				DiseaseAreaables::updateOrCreate([
					'disease_area_id' => $val,
					'disease_areaable_id' => Auth::id(),
					'disease_areaable_type' => 'App\\Models\\User',
				],[
					'created_at' => now(),
					'updated_at' => now(),
				]);

				$cookie_contents_server = $this->get_disease_areas(Auth::id());
			}
			
		}
		
		if (count($cookie_contents_server) > 0) {
			sort($cookie_contents_server);
			$this->write_cookie($cookie_contents_server);
		} else {
			$this->delete_cookie();
		}

		return true;
    }

	public function remove_from_cookie(Request $request) // remove area from server cookie when deselected on the specialities filter.
    {
		$this->authorize('remove_from_cookie', DiseaseAreaables::class);
		
		if(isset($_COOKIE['disease_area_server'])){
			$diseases = $request->keys();
			$diseases = $diseases[0];
			$diseases = explode(",", $diseases);
			$cookie_contents_server = json_decode($_COOKIE['disease_area_server']);
			$cookie_contents_server = array_diff($cookie_contents_server, $diseases);
			sort($cookie_contents_server);
			$this->write_cookie($cookie_contents_server);
		}
	}

    public function delete_disease_areas($id)
    {
		$res=DiseaseAreaables::where('disease_areaable_id',$id)
			->where('disease_areaable_type', 'App\\Models\\User')
			->delete();
		$this->delete_cookie();
    }

	public function get_disease_areas($id)
    {		
        $disease_area_array = array();
        $disease_areas = DiseaseAreaables::select('disease_area_id')
        ->where('disease_areaable_id', '=', $id)
        ->where('disease_areaable_type', '=', 'App\\Models\\User')->get();

        foreach($disease_areas as $disease_area){
            $disease_area_array[] = $disease_area->disease_area_id;
        }
		return $disease_area_array;
	}

	public function get_speciality_count($user_id)
	{
		$speciality_count_array = array();

		$specialities_count = DB::table('disease_areas')
			->join('disease_areaables', 'disease_areas.id', '=', 'disease_areaables.disease_area_id')
			->where('disease_areaable_id', '=', $user_id)
			->where('disease_areaable_type', '=', 'App\\Models\\User')
            ->select('disease_areas.speciality_id', DB::raw('count(*) as total'))
            ->groupBy('speciality_id')
			->orderBy('speciality_id')
        	->get();

		foreach($specialities_count as $speciality_count){
			$speciality_count_array[$speciality_count->speciality_id] = $speciality_count->total;
		}

		return $speciality_count_array;
	}
	
	public function filter_on_disease($cat_class, $user, $permitted_content, $restricted_content)
	{	 
        $config_val = Config::getValue('DISPLAY_SPECIALITIES');
        $displaySpecialities = filter_var($config_val[0], FILTER_VALIDATE_BOOLEAN);
        $cookie_contents = array();     // which cookies are set
		$permitted_or_restricted = array();

        if($displaySpecialities){	
            $contentDiseaseArea = DiseaseAreaables::where('disease_areaable_type', $cat_class)->get();
                
            if(count($contentDiseaseArea) > 0){ // Content is restricted by disease area
				if(isset($_COOKIE['disease_area_client']) && $_COOKIE['disease_area_client'] <> '[]' && !is_null($_COOKIE['disease_area_client'])){
					$cookie_contents = json_decode($_COOKIE['disease_area_client']);
					sort($cookie_contents);
				}
					
				if(isset($_COOKIE['disease_area_server'])){
					$cookie_contents_server = json_decode($_COOKIE['disease_area_server']);
					$cookie_contents = array_unique(array_merge($cookie_contents, $cookie_contents_server), SORT_REGULAR);
					sort($cookie_contents);
				}
                    
                if(count($cookie_contents) > 0){
                    foreach($contentDiseaseArea as $contDisease){
                        if(array_search($contDisease->disease_area_id, $cookie_contents) !== false){
                            $permitted_content[$contDisease->disease_areaable_id] = $contDisease->disease_areaable_id;
                        }else{
                            $restricted_content[$contDisease->disease_areaable_id] = $contDisease->disease_areaable_id;
                        }
                    }
                }
            }
		}
		$permitted_or_restricted[] = $restricted_content;
		$permitted_or_restricted[] = $permitted_content;			

		return $permitted_or_restricted;
	}
    
    public function write_cookie($selected_areas)
    {
      	$minutes = 60 * 24 * 365 * 10;
      	$cookie_contents = $selected_areas;
      	sort($cookie_contents);
      	$cookie_contents = json_encode($cookie_contents);
      	Cookie::queue('disease_area_server', $cookie_contents, $minutes);
    }

	public function delete_cookie()
	{
		Cookie::queue(\Cookie::forget('disease_area_server'));
	}

	public function delete_cookies()
	{
		Cookie::queue(\Cookie::forget('disease_area_server'));
		Cookie::queue(\Cookie::forget('disease_area_client'));

		return Redirect::back()->with('message', 'Specialities removed');
	}
}