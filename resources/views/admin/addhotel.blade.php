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
                <div class="panel-heading">Add Hotel</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{route('hotelinfo.store')}}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="name" value="{{Auth::user()->hotelname}}" readonly>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                            <textarea class="form-control" rows="5"  name="description" Placeholder="Hotel Description"></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Location</label>

                            <div class="col-md-6">
                            <select class="form-control" name="location"  required >
                                 <option selected disabled> Select Location</option>
                                 <option value="Nairobi">Nairobi</option>
                                 <option value="Nakuru">Nakuru</option>
                                 <option value="Eldoret">Eldoret</option>
                                 <option value="Naivasha">Naivasha</option>
                                 <option value="Nyahururu">Nyahururu</option>
                             </select>    

                                @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                   <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="address" required>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ratings') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Ratings</label>

                            <div class="col-md-6">
                              <select class="form-control" name="ratings"  required >
                                <option selected disabled> Select Rating</option>
                                <option value="none">None</option>
                                <option value="*">*(1)</option>
                                <option value="**">**(2)</option>
                                <option value="***">***(3)</option>
                                <option value="****">****(4)</option>
                                <option value="*****">*****(5)</option>
                              </select>  


                                @if ($errors->has('ratings'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ratings') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Active</label>

                            <div class="col-md-6">
                             
                                <input type="checkbox"  name="active" value="Yes" required>

                                @if ($errors->has('active'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('active') }}</strong>
                                    </span>
                                @endif
                             
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="pinno" class="col-md-4 control-label">Image</label>

                                <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <span class="btn btn-default btn-file">
                                         Browse… <input type="file" id="img" name="image">
                                      </span>
                                   </span>
                                 <input type="text" class="form-control" name="image" value="{{ old('image') }}" readonly>

                                   @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif

                               </div>
                               <img id='img-upload'  class="img-circle"/>
                                </div>
                        </div>
                        

                     
                        
                 <div class="form-group">   
                    <div class="col-md-5 col-md-offset-6">
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