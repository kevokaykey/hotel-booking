@extends('adminlayout.master')

@section('content-header')
  <h1>
  Dashboard
  <small>Control panel</small>
  </h1>
  <ol class="breadcrumb">
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Dashboard</li>
  </ol>
@stop

@section('content')

<div class="row">
 <div class="col-xs-12">
  <div class="row no-print">
              <div class="col-xs-12">
                <button target="_blank" class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                <div class="pull-right">
                <a href="#"><button  class="btn btn-default" > Export</button></a>  
               </div> 
               <div class="pull-right">
                <a href="{{route('coupon.create')}}"><button  class="btn btn-default" > Add New</button></a>  
               </div> 
            </div> 

            </div>
 </div> 
 </div>  </br>        

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">BOOKINGS</h3>

                         
            

                    

              
           
              
              
            <div class="box-body table-responsive no-padding">

           

              <table  id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Created Date</th>
                  <th>Booking Number</th>
                  <th> Check In </th>
                  <th>Check Out</th>
                  <th>Hotel</th>
                  <th>Room Type</th>
                  <th>Rooms</th> 
                  <th>Customer</th>
                  <th>Phone</th>
                  <th>Payment Method </th>
                  <th>Payment Type </th>
                  <th>Total paid </th>
                  <th>Status</th>
                  <th>Action </th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($bookings as $booking)
                <tr>
                  <td>{{$booking->created_at}} </td>
                  <td>{{$booking->bookref}}</td>
                  <td>{{$booking->checkin}} </td>
                  <td>{{$booking->checkout}} </td>
                  <td>{{$booking->hotel}} </td>
                  <td> {{$booking->rtype}}</td>
                  <td>{{$booking->noofrooms}} </td>
                  <td>{{$booking->fname}} {{$booking->lname}} </td>
                  <td>{{$booking->mobileno}} </td>
                  <td>{{$booking->pmethod}} </td>
                  <td>{{$booking->ptype}} </td>
                  <td>{{$booking->totalp}} </td>
                  <td> </td>
                  <td> 
                <a href="{{ '/booking/'.$booking->id. '/edit'  }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                
                  </td>
                 
                </tr>
                @endforeach
                
                </tbody>
              </table>
             </div>
              </div>
			  </div>

              </div></div>


@endsection