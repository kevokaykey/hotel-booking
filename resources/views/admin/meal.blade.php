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
                <a href="{{route('meal.create')}}"><button  class="btn btn-default" > Add New</button></a>  
               </div> 
            </div> 

            </div>
 </div> 
 </div>  </br>        

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">MEALS</h3>

                         
            

                    
            
              
           
              
              
            <div class="box-body table-responsive no-padding">

           

              <table  id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Hotel</th>
                  <th>Name</th>
                  <th>Description </th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                
                @foreach($meals as $meal)
                <tr>
                  
                  <td>{{$meal->hotel}} </td>
                  <td>{{$meal->type}}</td>
                  <td> {{$meal->description}}</td>
                  <td>{{$meal->price}} </td>
                  
                  <td>
                                   
                  
                <a href="{{'/meal/'.$meal->id. '/edit'  }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> 
                <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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