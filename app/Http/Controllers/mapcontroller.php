<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FarhanWazir\GoogleMaps\GMaps;
use DB;
use App\room;
use App\hotelinfo;
use Session;



class mapcontroller extends Controller
{
    //
    protected $gmap;

    public function __construct(GMaps $gmap){
        $this->gmap = $gmap;
    }

    public function showmap(Request $request){

       $hotel = $request->input('hotelh');
       $location = $request->input('location');
         //dd($location);

    $config = array();
   // $config['map_height'] = "100%";
    $config['zoom'] = "14";
    $config['center'] = 'Anniversary Towers';

    

    $this->gmap->initialize($config);

    $marker['position'] = 'Anniversary Towers ';
    $marker['infowindow_content'] ='Anniversary';

    $this->gmap->add_marker($marker);
    
    $map = $this->gmap->create_map();

    $data['hotel'] = $hotel; 
    $data['map'] = $map;
    $data['location'] = $location;
       // dd($hotel);

    return view('user.map', $data );
    }
}
