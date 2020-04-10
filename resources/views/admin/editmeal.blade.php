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
                    <form class="form-horizontal" method="POST" action="{{ '/rooms/' .$meals->id }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT')}}

                        <div class="form-group{{ $errors->has('hotel') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Hotel</label>

                            <div class="col-md-6">
                                <select class="form-control" name="hotel"  required >
                                 <option value="{{$meals->hotel}}" selected > {{$meals->hotel}}</option>
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

                        <div class="form-group{{ $errors->has('mealtype') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Meal Type</label>

                            <div class="col-md-6">
                                <select class="form-control" name="mealtype"  required >
                                    <option value="{{$meals->type}}" selected > {{$meals->type}}</option>
                                    <option value="Breakfast">Breakfast</option>
                                    <option value="halfboard">Half Board</option>
                                    <option value="fullboard">Full board</option>
                                    
                                </select>  

                                @if ($errors->has('mealtype'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mealtype') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                            <textarea class="form-control" rows="5"  name="description" >{{$meals->description}}
                            </textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="price" value="{{ $meals->price }}" >

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        
                        
                   {{--     <div class="form-group{{ $errors->has('active') ? ' has-error' : '' }}">
                            <label  class="col-md-4 control-label">Active</label>

                            <div class="col-md-6">
                             
                                <input type="checkbox"  name="active" value="Yes" required>

                                @if ($errors->has('active'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('active') }}</strong>
                                    </span>
                                @endif
                             
                            </div>
                        </div>  --}}

                        
                        

                     
                        
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