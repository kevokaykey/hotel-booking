<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\room;
use Auth;

class availableroomscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
       $destination = $request->input('destination');
       $adults = $request->input('adults');
       $child = $request->input('children');
       $checkin = $request->input('checkin');
       $checkout = $request->input('checkout');
       $hotel =  $request->input('hotelh');

      //  $rmtype =  $request->input('type'); dd($rmtype);


       $meals =  DB::table('meals')
               // ->join('hotelinfos','rooms.hotel', '=' , 'hotelinfos.name')
               // ->join('meals','rooms.hotel', '=' , 'meals.hotel')
                ->where('hotel','=', $hotel )
             //   ->where('rooms.type', '=' , $)
                
                ->get(); //dd($meals);  
                

       $roomstaken =DB::table('bookings')
                    ->select(DB::raw('SUM(bookings.roomupdate) as trooms'),'bookings.rtype','bookings.hotel')
                    ->where('bookings.hotel', '=' ,$hotel)
                    ->groupby('bookings.rtype','bookings.hotel')
                    ->get(); // dd($roomstaken);



        $roomsnot = DB::table('bookings')
                    ->select('rtype')
                    ->where('bookings.hotel', '=' ,$hotel)
                    ->get();

        $roomsnotbook = json_decode($roomsnot,true);


      $roomsnotbooked =DB::table('rooms')->where('rooms.hotel', '=' ,$hotel)->select('*')
                       ->whereNOTIn('type',$roomsnotbook)
                      ->get(); //dd($roomsnotbookedd);






       $availableroom = DB::table("rooms")
                        ->where('rooms.hotel','=', $hotel )
                        ->get();  //dd($availableroom);




           // dd($availableroom);
         // dd($availableroom->type);

         $noroom = DB::table("rooms")
                      ->join('hotelinfos','rooms.hotel', '=' , 'hotelinfos.name')
                     ->select('noofrooms')
                     ->where('hotel','=', $hotel )
                     ->where('name','=', $hotel )
                    // ->where('type', = )
                     
                    ->where('maxadults', '<=', $adults)
                  //   ->orwhere('maxadults', '=', $adults)
                  //   ->orwhere('maxchildren', '<=', $child)
                    ->orwhere('maxchildren', '=', $child)
                   //  ->where('rooms.hotel','=', $hotel )
                    ->groupby('noofrooms')
                     ->first();  

                   // dd($noroom);



     
          $ammenities = DB::table('facilities')
                       ->where('hotel', $hotel)
                       ->get();           


         $data['availableroom']= $availableroom;
         $data['destination']= $destination;
         $data['adults']= $adults;
         $data['child']= $child;
      //   $data['destination']= $destination;
         $data['checkin']= $checkin;
         $data['checkout']= $checkout;
         $data['hotel']= $hotel;
         $data['noroom']= $noroom;
         $data['roomstaken']= $roomstaken;
         $data['meals']= $meals;
         $data['ammenities']= $ammenities;
        $data['roomsnotbooked'] = $roomsnotbooked;




         
         
        // dd($destination);
      // dd($hotel);
      // dd($availableroom);
      // dd($noroom->noofrooms);
     // dd($roomstaken);
     //  dd($meals);

         
         return view('user.availablerooms',$data);
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
