<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\room;
use App\meal;
use App\hotelinfo;
use Session;
use Auth;

class mealcontroller extends Controller
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
            $meals = DB::table('meals')->get();


        }
        $meals = DB::table('meals')
                 ->where('hotel','=',$auser)
                 ->get();

        $data['meals']= $meals;
        
        return view('admin.meal',$data);
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

        return view('admin.addmeal',$data);
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
    
            $User= new meal;
            $User-> hotel = $request->hotel;
            $User-> description = $request-> description;
            $User-> price = $request-> price;
            $User-> type =  $request-> mealtype;
            
            $User->save();

            Session::flash('message', 'Added succesfully');
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
        $meals = meal::find($id);
        $hotels = DB::table('hotelinfos')->get();
        

        $data['meals'] = $meals;
        $data['hotels']= $hotels;

        return view('admin.editmeal', $data);
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
        $meal = meal::find($id);
            
            $this->validate($request,[
                       
            
                ]);
               
                      
        $meal->hotel = $request->get('hotel');
        $meal->type = $request->get('mealtype');
        $meal->description = $request->get('description');
        $meal->price = $request->get('price');
        $meal->save();
    
        Session()->flash('message', 'Updated Successfully');
         return view('meal.index');
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
