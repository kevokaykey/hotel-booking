<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\room;
use App\hotelinfo;
use App\booking;
use Session;
use Carbon;

class bookcontroller extends Controller
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
        $hotel =  $request->input('hotel');
        $type =  $request->input('type');

        $rooms =  $request->input('roomno');
        $meal =  $request->input('meal');
        $ebed =  $request->input('xbed');

        $fname =  $request->input('fname');
        $lname =  $request->input('lname');


        $bookd = DB::table("rooms")
            ->join('hotelinfos','rooms.hotel', '=' , 'hotelinfos.name')
            //  ->join('meals','rooms.hotel', '=', 'meals.hotel')
            // ->select('rooms.description')
            ->where('rooms.hotel','=', $hotel )
            ->where('rooms.type', '=', $type)

            //   ->where('meals.type', '=', $mymeal)
            // ->where('rooms.type','=', $type )
            //   ->where('maxadults', '<=', $adults)
            //   ->orwhere('maxchildren', '=', $child)
            //   ->groupby('rooms.description')
            ->first();

        //   dd($bookd);

        $mealprice = DB::table("rooms")

            ->join('meals','rooms.hotel', '=', 'meals.hotel')
            // ->select('rooms.description')
            ->where('rooms.hotel','=', $hotel )
            ->where('meals.type', '=', $meal)
            ->where('rooms.type','=', $type )
            ->where('maxadults', '<=', $adults)
            ->orwhere('maxchildren', '=', $child)
            //   ->groupby('rooms.description')
            ->get();

        $bookdetail = DB::table('bookings')
            ->where('fname', '=', $fname)
            ->where('lname', '=', $lname)
            ->first();

        //dd($mealprice);
        // dd($checkout);

        $from = \Carbon\Carbon::createFromFormat('d/m/Y', $checkin);
        $to = \Carbon\Carbon::createFromFormat('d/m/Y', $checkout);

        $diff_in_days = $to->diffInDays($from);
         $checkins = $from->toFormattedDateString();
         $checkouts = $to->toFormattedDateString();

        // dd($diff_in_days);



        $data['destination'] = $destination;
        $data['bookd'] = $bookd;
        $data['adults'] = $adults;
        $data['child'] = $child;
        $data['checkin'] = $checkin;
        $data['checkout'] = $checkout;
        $data['checkins'] = $checkins;
        $data['checkouts'] = $checkouts;
        $data['hotel'] = $hotel;

        $data['rooms'] = $rooms;
        $data['meal'] = $meal;
        $data['ebed'] = $ebed;
        $data['diff_in_days'] = $diff_in_days;

        $data['fname'] = $fname;
        $data['lname'] = $lname;

        $data['mealprice'] = $mealprice;

        $data['bookdetail'] = $bookdetail;



        return view('user.book',$data);
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



        $fname= $request->fname;
        $lname= $request->lname;
        $phon= $request->phone;




         //   $phonee=implode(" ",$phonn);
          //  $phoneee = substr($phonee,4);
            $pho = substr($phon,1);
            $phone= '254'.$pho;




       // dd($phonee);


        $hotel= $request->hotel;
        $type= $request->type;
        $checkin= $request->checkin;
        $checkout= $request->checkout;
        $rooms= $request->rooms;
        $tprice= $request->tprice;

        $rrremainingrooms = $request->rrremainingrooms;
        $rremainingrooms = $request->rremainingrooms;
        $remainingrooms = $request->remainingrooms;

        $mytime = Carbon\Carbon::now();

        $this->validate($request,[


        ]);

        

        $User= new booking;
        $User-> bookref = str_random(10);
        $User-> fname = $request->fname;
        $User-> fname = $request->fname;
        $User-> lname =  $request->lname;
        $User-> mobileno = $request->phone;
        $User-> hotel = $request-> hotel;
        $User-> rtype = $request-> type;
        $User-> checkin= $request-> checkin;
        $User-> checkout = $request-> checkout;
        $User-> noofrooms = $request-> rooms;
        $User-> roomupdate = $request-> roomup;
        //   $User-> pmethod = $request-> paymentm;
        //   $User-> ptype= $request-> paymenttype;
        $User-> totalp = $request-> tprice;
        $User->status ="Not Paid";
        $User->pmethod ="None";


        $User->save();
      //  Session::flash('message', 'Booked  Succesfully');



        $bookd = DB::table('bookings')
            ->where("fname", '=', $fname)
            ->where("lname", '=', $lname)
            ->where("checkin", '=', $checkin)
            ->where("checkout", '=',  $checkout)
            ->where("totalp", '=', $tprice)
            ->first();

        $data['fname'] = $fname;
        $data['lname'] = $lname;
        $data['phone'] =  $phone;
        $data['type'] = $type;
        $data['checkin'] = $checkin;
        $data['checkout'] = $checkout;
        $data['rooms'] = $rooms;
        $data['mytime'] = $mytime;
        $data['hotel'] = $hotel;
        $data['tprice'] = $tprice;
        $data['bookd'] = $bookd;

        return view('user.invoice', $data);
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
        $bookupdate = booking::find($id);

        $this->validate($request,[


        ]);


        $bookupdate-> pmethod = $request->get('paymentmethod');
        $bookupdate-> status = "Paid";

        $bookupdate->save();
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
