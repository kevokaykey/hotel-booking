<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\room;
use App\hotelinfo;
use Session;
use Auth;

class roomscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $auser = Auth::user()->hotelname;

        if(Auth::user()->hotelowner = 1)
          {
              $hotels = DB::table('hotelinfos')->get();
              $rooms = DB::table('rooms')->get();

          }
          else {
              $hotels = DB::table('hotelinfos')
                  ->where('name', '=', $auser)
                  ->get();
              $rooms = DB::table('rooms')
                  ->where('hotel', '=', $auser)
                  ->get();
          }

        $data['rooms']= $rooms;
        $data['hotels']= $hotels;
       

        return view('admin.rooms',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $hotels = DB::table('hotelinfos')->get();
        $data['hotels']= $hotels;

        return view('admin.addroom', $data);
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
        $this->validate($request,[
            
            ]);
    
            $User= new room;
            $User-> hotel = $request->hotel;
            $User-> description = $request-> rdescription;
            $User-> type =  $request-> type;
            $User-> maxadults = $request-> adults;
            $User-> maxchildren = $request-> child;
            $User-> noofrooms =  $request-> noofrooms;
            $User-> nobed = $request-> beds;
            $User-> bathroom = $request-> bathrooms;
            $User-> roomarea = $request-> roomarea;
            $User-> dprice = $request-> dprice;
            $User-> active = $request-> active;
            $User-> iconimage = $request-> icon;
            $User-> image1 = $request-> image1;
            $User-> image2 = $request-> image2;
            $User-> image3 = $request-> image3;
            $User-> image4 = $request-> image4;
            $User-> image5 = $request-> image5;
            $User-> save();
            Session::flash('message', 'Room added succesfully');
            return back();
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
        $room = room::find($id);
        $hotels = DB::table('hotelinfos')->get();

        $data['room']= $room;

        
        $data['hotels']= $hotels;

        return view('admin.editrooms', $data);
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
        $room = room::find($id);
            
        $this->validate($request,[
                   
        
            ]);
           
                  
        $room->hotel = $request->get('hotel');
        $room->type = $request->get('type');
        $room->maxadults = $request->get('adults');
        $room->maxchildren = $request->get('child');
        $room->noofrooms = $request->get('noofrooms');
        $room->bathroom = $request->get('bathrooms');
        $room->roomarea = $request->get('roomarea');
        $room->dprice = $request->get('dprice');
        $room->description = $request->get('description');
        $room->nobed = $request->get('beds');
        $room->save();

        Session()->flash('message', 'Updated Successfully');
        return view('rooms.index');
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
