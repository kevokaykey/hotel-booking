<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\facility;
use Session;
use Auth;

class facilitycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $owner = Auth::user()->hotelname;
        $facility = DB::table('facilities')
                   ->where("hotel", $owner)
                   ->get();
        $data['facility'] = $facility;

        return view('admin.facilities',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.addfacility');
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
    
            $User= new facility;
            $User-> name = $request->name;
            $User-> hotel= $request->hname;
            $User->save();

            Session::flash('message', 'Facility added succesfully');
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
        $facility = facility::find($id);

        $data['facility']= $facility;

        return view('admin.editfacility', $data);
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
        $facility = facility::find($id);
            
        $this->validate($request,[
                   
        
            ]);
           
                  
        $facility->name = $request->get('name');
        $facility->save();

        Session()->flash('message', 'Updated Successfully');
        return back();
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
