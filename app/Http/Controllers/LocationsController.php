<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use mysql_xdevapi\Result;
use Stevebauman\Location\Facades\Location;

class LocationsController extends Controller
{

    //find customer location
 public function find_user_location(Request $request){
     $ip=$request->ip();
     $currentUserInfo=Location::get('https://'.$request->ip());
     return ['user_lat'=>$currentUserInfo->latitude,'user_lng'=>$currentUserInfo->longitude];
//     return ['user_lat'=>'22.2734719','user_lng'=>'70.7512559'];

 }
 //get-locations-nearest-the-user-location

   public function calculateDistanceBetweenTwoAddresses($lat1, $lng1, $lat2, $lng2){
        $lat1 = deg2rad($lat1);
        $lng1 = deg2rad($lng1);

        $lat2 = deg2rad($lat2);
        $lng2 = deg2rad($lng2);

        $delta_lat = $lat2 - $lat1;
        $delta_lng = $lng2 - $lng1;

        $hav_lat = (sin($delta_lat / 2))**2;
        $hav_lng = (sin($delta_lng / 2))**2;

        $distance = 2 * asin(sqrt($hav_lat + cos($lat1) * cos($lat2) * $hav_lng));

        $distance = 6371*$distance;
        // If you want calculate the distance in miles instead of kilometers, replace 6371 with 3959.

        return $distance;
    }

   public function find_nearest_branches_from_user(Request $request){
       $branches=Branch::all();
     $user_location=$this->find_user_location($request);
         $user_lat=$user_location['user_lat'];
         $user_lng=$user_location['user_lng'];


       $markers = collect($branches)->map(function($item) use ($user_lat,$user_lng) {
           $item['distance'] = $this->calculateDistanceBetweenTwoAddresses($item['location_lat'], $item['location_lng'], $user_lat, $user_lng);
           return $item;
       });
       $branches = $markers->where('distance', '<', 20000); //km
       $result=[];
     foreach ($branches as $branch){
         $result[]=[
           'name'=>$branch->name,
           'location_lat'=>$branch->location_lat,
            'location_lng'=>$branch->location_lng
         ];
     }
     return $result;

        }
//set locations markers on map
public function set_markers_on_map(Request $request){
     $user_location=$this->find_user_location($request);
    $user_lat=$user_location['user_lat'];
    $user_lng=$user_location['user_lng'];
     $locations=$this->find_nearest_branches_from_user($request);
// in view use $locations[0]['location_lat'];
     return view('googleAutoComplete',compact('locations','user_lat','user_lng'));

}



}
