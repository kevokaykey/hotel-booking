<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\room;
use App\hotelinfo;
use Session;
use FarhanWazir\GoogleMaps\GMaps;

class checkavailabilitycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $gmap;

    public function __construct(GMaps $gmap){
    $this->gmap = $gmap;
    }

    public function index(Request $request)
    {
        
       
          $destination = $request->input('destination');
          $adults = $request->input('adults');
          $child = $request->input('children');
          $checkin = $request->input('checkin');
          $checkout = $request->input('checkout');
          
          
        $hotels = DB::table('hotelinfos')->get();
         $available = DB::table("rooms")
                //     ->join('rooms')
                     ->join('hotelinfos','rooms.hotel', '=' , 'hotelinfos.name')
                 //     ->select('hotel','noofrooms','hotelinfos.description')
                 //    ->where('location','=', $destination )
                     ->orwhere('maxadults', '<', $adults)
                     ->orwhere('maxadults', '=', $adults)
                     ->orwhere('maxchildren', '<', $child)
                     ->orwhere('maxchildren', '=', $child)
                  //   ->groupby('hotel','noofrooms','hotelinfos.description')
                     ->get();
       // dd($available);
          
          $data['destination'] = $destination;
          $data['available'] = $available;
          $data['adults'] = $adults;
          $data['child'] = $child;
          $data['checkin'] = $checkin;
          $data['checkout'] = $checkout;
          $data['hotels'] = $hotels;

      return view('user.checkavailability', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
