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
                <div class="panel-heading">Add Room</div>
                  <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ '/rooms/' .$room->id }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT')}}


                  <div class="col-md-6">
                        <div class="form-group{{ $errors->has('hotel') ? ' has-error' : '' }}">
                            <label  class="col-md-3 control-label">Hotel</label>

                            <div class="col-md-6">
                                <select class="form-control" name="hotel"  required >
                                 <option value="{{$room->hotel}}" selected>{{$room->hotel}}</option>
                                  @foreach($hotels as $hotel)
                                    <option value="{{$hotel->name}}"> {{$hotel->name}}</option>
                                  @endforeach
                                
                                </select> 

                                @if ($errors->has('hotel'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hotel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label  class="col-md-3 control-label">Description</label>

                            <div class="col-md-6">
                            <textarea class="form-control" rows="5"  name="description" >{{$room->description}}</textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label  class="col-md-3 control-label">Type</label>

                            <div class="col-md-6">
                            <select class="form-control" name="type"  required >
                                 <option value="{{$room->type}}" selected > {{$room->type}}</option>
                                 <option value="Single">Single</option>
                                 <option value="Double">Double</option>
                                 <option value="Superior">Superior</option>
                                 <option value="Luxury">Luxury</option>
                                
                             </select>    

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                   
                        <div class="form-group{{ $errors->has('adults') ? ' has-error' : '' }}">
                            <label  class="col-md-3 control-label">Max Adults</label>

                            <div class="col-md-6">
                             <input  type="text" class="form-control" name="adults" value="{{$room->maxadults}}" required autofocus>
                                
                                @if ($errors->has('adults'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adults') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('child') ? ' has-error' : '' }}">
                            <label  class="col-md-3 control-label">Max children</label>

                            <div class="col-md-6">
                             
                                <input type="text" class="form-control"  name="child" value=" {{$room->maxchildren}}" required autofocus>

                                @if ($errors->has('child'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('child') }}</strong>
                                    </span>
                                @endif
                             
                            </div>
                        </div>

                     <div class="form-group{{ $errors->has('noofrooms') ? ' has-error' : '' }}">
                            <label  class="col-md-3 control-label">No. of Rooms</label>

                            <div class="col-md-6">
                             
                            <input type="text" class="form-control"  name="noofrooms" value="{{$room->noofrooms}}" required autofocus>

                                @if ($errors->has('noofrooms'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('noofrooms') }}</strong>
                                    </span>
                                @endif
                             
                            </div>
                        </div>
                 </div>

                    <div class="col-md-6">       

                      <div class="form-group{{ $errors->has('beds') ? ' has-error' : '' }}">
                            <label  class="col-md-3 control-label">Beds</label>

                            <div class="col-md-6">
                             
                            <input type="text" class="form-control"  name="beds" value="{{$room->nobed}}" required autofocus>

                                @if ($errors->has('beds'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('beds') }}</strong>
                                    </span>
                                @endif
                             
                            </div>
                        </div>

                     <div class="form-group{{ $errors->has('bathrooms') ? ' has-error' : '' }}">
                            <label  class="col-md-3 control-label">Bathrooms</label>

                            <div class="col-md-6">
                             
                            <input type="text" class="form-control"  name="bathrooms" value="{{$room->bathroom}}" required autofocus>

                                @if ($errors->has('bathrooms'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bathrooms') }}</strong>
                                    </span>
                                @endif
                             
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('roomarea') ? ' has-error' : '' }}">
                            <label  class="col-md-3 control-label">Room Area</label>

                            <div class="col-md-6">
                             
                            <input type="text" class="form-control"  name="roomarea" value="{{$room->roomarea}}" required autofocus>

                                @if ($errors->has('roomarea'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('roomarea') }}</strong>
                                    </span>
                                @endif
                             
                            </div>
                        </div>

                     <div class="form-group{{ $errors->has('dprice') ? ' has-error' : '' }}">
                            <label  class="col-md-3 control-label">Default Price</label>

                            <div class="col-md-6">
                             
                            <input type="text" class="form-control"  name="dprice" value="KSh {{$room->dprice}}" required autofocus>

                                @if ($errors->has('dprice'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dprice') }}</strong>
                                    </span>
                                @endif
                             
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}">
                            <label  class="col-md-3 control-label">Active</label>

                            <div class="col-md-6">
                             
                                <input type="checkbox"  name="active" value="Yes" checked required>

                                @if ($errors->has('active'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('active') }}</strong>
                                    </span>
                                @endif
                             
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
                                <label for="pinno" class="col-md-3 control-label">Image</label>

                                <div class="col-md-6">
                                
                                 <input type="file"  name="icon" value="{{$room->image}}" >

                                   @if ($errors->has('icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('icon') }}</strong>
                                    </span>
                                    @endif

                               </div>
                               
                        </div>
                    

                  </div>

                  <div class="form-group">   
                    <div class="col-md-5 col-md-offset-5">
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