<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\hotelinfo;
use Session;
use Auth;

class hotelinfocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $auser = Auth::user()->hotelname;

      // $name = $request->get('hname');

     // $hotels = DB::table('hotelinfos')->get();
     if(Auth::user()->hotelowner = 1)
     {
         $hotels = DB::table('rooms')
             ->join('hotelinfos','rooms.hotel', '=', 'hotelinfos.name')
             ->select(DB::raw('SUM(rooms.noofrooms) as trooms'),'rooms.hotel','location','addrress','ratings','hotelinfos.id')
             //   ->where('rooms.hotel', '=' , $hotels->name)
           //  ->where('name','=',$auser)

             ->groupby('rooms.hotel','location','addrress','ratings','hotelinfos.id')
             ->get();

     }
       $hotels = DB::table('rooms') 
                ->join('hotelinfos','rooms.hotel', '=', 'hotelinfos.name')
                ->select(DB::raw('SUM(rooms.noofrooms) as trooms'),'rooms.hotel','location','addrress','ratings','hotelinfos.id')
             //   ->where('rooms.hotel', '=' , $hotels->name)
                 ->where('name','=',$auser)

                ->groupby('rooms.hotel','location','addrress','ratings','hotelinfos.id')
                ->get();
      //  dd($roomcount);

       
        return view('admin.hotelinfo',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.addhotel');
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

        $User= new hotelinfo;
		$User-> name = $request->name;
		$User-> location =  $request-> location;
        $User-> ratings = $request-> ratings;
        $User-> active = $request-> active;
        $User-> addrress = $request-> address;
        $User-> description = $request-> description;
        $User-> image = $request-> image;
        $User-> save();
		Session::flash('message', 'Hotel added succesfully');
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
        $hotel = hotelinfo::find($id);

        $data['hotel']= $hotel;

        return view('admin.edithotelinfo', $data);
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
        $hotel = hotelinfo::find($id);
            
        $this->validate($request,[
                   
        
            ]);
           
                  
        $hotel->name = $request->get('name');
        $hotel->location = $request->get('location');
        $hotel->ratings = $request->get('ratings');
        $hotel->addrress = $request->get('address');
        $hotel->description = $request->get('description');
       
        $hotel->save();

        Session()->flash('message', 'Updated Successfully');
        return view('hotelinfo.index');
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
