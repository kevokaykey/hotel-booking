<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\room;
use App\hotelinfo;
use App\booking;
use Session;
use Auth;


class bookingcontroller extends Controller
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

        if(Auth::user()->hotelowner = 1) {
            $bookings = DB::table('bookings')->get();
        }

            $bookings = DB::table('bookings')
                ->where('hotel', '=', $auser)
                ->get();

        $data['bookings'] = $bookings;

        return view('admin.bookings',$data);
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
        $bookings = booking::find($id);

        $data['bookings']= $bookings;

        return view('admin.editbooking', $data);
    
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
        $book = booking::find($id);
            
            $this->validate($request,[
                       
            
                ]);
               
                      
        $book->status = $request->get('status');
        $book->roomupdate = $request->get('roomupdate');
        $book->save();
    
        Session()->flash('message', 'Updated Successfully');
         return view('booking.index');
                
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
