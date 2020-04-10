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

          <div class="col-md-5 col-md-offset-3">
                @if(Session::has('message'))
                     <div class="alert alert-success">
                        <ul>
                        <li>{{ Session::get('message') }}</li>
                        
                        </ul>

                    </div>

                @endif
            </div>

<div class="container">
    <div class="row">
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Booking</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ '/booking/' .$bookings->id }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT')}}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Booking #</label>

                            <div class="col-md-4">
                                <input  type="text" class="form-control" name="name" value="{{ old('name') }}" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('customer') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Customer</label>

                            <div class="col-md-4">
                            <input type="text" class="form-control"  name="customer" value="{{$bookings->fname}} {{$bookings->lname}}" readonly>

                                @if ($errors->has('customer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('customer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('noofrooms') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">No of rooms</label>

                            <div class="col-md-4">
                            <input type="text" class="form-control"  name="noofrooms" value="{{$bookings->noofrooms}}" readonly>

                                @if ($errors->has('noofrooms'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('noofrooms') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('createddate') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Date Created</label>

                            <div class="col-md-4">
                            <input class="form-control"  name="createddate" value="{{$bookings->created_at}}" readonly />

                                @if ($errors->has('createddate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('createddate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('paymenttype') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Payment Type</label>

                            <div class="col-md-4">
                            <select class="form-control" name="paymenttype"   readonly >
                                 
                                 <option value="{{$bookings->ptype}}">{{$bookings->ptype}}</option>
                                 
                             </select>    

                                @if ($errors->has('paymenttype'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('paymenttype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                           <div class="form-group{{ $errors->has('paymentmethod') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Payment Method</label>

                            <div class="col-md-4">
                            <select class="form-control" name="paymentmethod"   readonly >
                                 
                                 <option value="{{$bookings->pmethod}}">{{$bookings->pmethod}}</option>
                                 
                             </select>    

                                @if ($errors->has('paymentmethod'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('paymentmethod') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                   

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Status</label>

                            <div class="col-md-4">
                              <select class="form-control" name="status"   required >
                                <option selected disabled> Select </option>
                                <option value="Pending">Pending</option>
                                <option value="Reserved">Reserved</option>
                                <option value="Completed">Completed(Paid)</option>
                                <option value="refunded">Refunded</option>
                                <option value="checkedout">Checked Out</option>
                                
                              </select>  


                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                     <div class="form-group{{ $errors->has('roomupdate') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Free room</label>

                            <div class="col-md-4">
                            <input class="form-control"  name="roomupdate" value="{{$bookings->roomupdate}}"  />

                                @if ($errors->has('roomupdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('roomupdate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('addition') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Additional info</label>

                            <div class="col-md-4">
                            <textarea class="form-control" rows="5"  name="addition" Placeholder="Additional info"></textarea>

                                @if ($errors->has('addition'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('addition') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        

                     
                        
                 <div class="form-group">   
                    <div class="col-md-5 col-md-offset-6">
                      <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                  </div>  
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection