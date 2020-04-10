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
                <div class="panel-heading">Add facilities</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('facility.store')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input type="text" name="name" value="{{old('name')}}" required autofocus>
                  
                                <input type="hidden" name="hname" value="{{Auth::user()->hotelname}}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                    

                      
                        
                        

                     
                        
                 <div class="form-group">   
                    <div class="col-md-5 col-md-offset-5">
                      <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                  </div>  
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection