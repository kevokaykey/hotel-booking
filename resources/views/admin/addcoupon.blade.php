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
                <div class="panel-heading">Add Coupon</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('coupon.store')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('hotel') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Target hotel</label>

                            <div class="col-md-6">
                               <input type="text" class="form-control" name="hotel" value="{{Auth::user()->hotelname}}" readonly>

                                @if ($errors->has('hotel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hotel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('couponcode') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Coupon Code</label>

                            <div class="col-md-6">
                            <input type="text" class="form-control"  name="couponcode" value="{{ old('couponcode') }}" required autofocus>

                                @if ($errors->has('couponcode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('couponcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('startdate') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Start Date</label>

                            <div class="col-md-6">
                            <div class="input-group date">
                               <div class="input-group-addon">
                                 <i class="fa fa-calendar"></i>
                               </div>
                                <input type="text" class="form-control pull-right" name="startdate" id="datepicker" value="{{ old('startdate') }}">  

                                @if ($errors->has('startdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div> 

                   <div class="form-group{{ $errors->has('finishdate') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Finish Date</label>

                        <div class="col-md-6">
                            <div class="input-group date">
                               <div class="input-group-addon">
                                 <i class="fa fa-calendar"></i>
                               </div>
                                <input type="text" class="form-control pull-right" name="finishdate" id="datepicker1" value="{{ old('finishdate') }}">  

                                @if ($errors->has('finishdate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('finishdate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        

                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('discount') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Discount</label>

                            <div class="col-md-6">
                              
                        <input type="text" class="form-control"  name="discount" value="{{ old('discount') }}" required autofocus>

                                @if ($errors->has('discount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('discount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Comment</label>

                            <div class="col-md-6">
                            <textarea class="form-control" rows="5"  name="comment" Placeholder="comment"></textarea>

                                @if ($errors->has('comment'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

               {{--         <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Active</label>

                            <div class="col-md-6">
                             
                                <input type="checkbox"  name="active" value="Yes" required>

                                @if ($errors->has('active'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('active') }}</strong>
                                    </span>
                                @endif
                             
                            </div>
                        </div>   --}}

                        
                        

                     
                        
                 <div class="form-group">   
                    <div class="col-md-5 col-md-offset-6">
                      <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                  </div>  
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection