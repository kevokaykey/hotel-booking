@extends('userlayout.master')

@include('userlayout.header')



                  <!-- Parallax Effect -->

<section class="parallax-effect">
  <div id="parallax-pagetitle" style="background-image: url(./images/parallax/1900x911.gif);">
    <div class="color-overlay"> 
      <!-- Page title -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li><a href="#">Available</a></li>
              
            </ol>
            <h1>Available Hotels</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



 <div class="row">
   <div class="container">
    <div class="col-md-3">
    <section id="reservation-form" class="mt50 clearfix">
     
     <br><br><br><br>   <form class="reservation-vertical clearfix" action="#" role="form" method="post" name="reservationform" id="reservationform">
          <h2 class="lined-heading"><span>Reservation</span></h2>
          
          <div id="message"></div>
          <!-- Error message display -->
          <div class="form-group{{ $errors->has('destination') ? ' has-error' : '' }}">
            <label for="email" accesskey="E">Destination</label>
               <select class="form-control" name="destination"  required autofocus>
                  <option value="{{ $destination}}" selected>{{ $destination}}</option>
                  <option value="Nairobi">Nairobi</option>
                  <option value="Nakuru">Nakuru</option>
                </select>
                         @if ($errors->has('destination'))
                              <span class="help-block">
                                <strong>{{ $errors->first('destination') }}</strong>
                              </span>
                          @endif
          </div>
          
          <div class="form-group{{ $errors->has('checkin') ? ' has-error' : '' }}">
            <label for="checkin">Check-in</label>
            <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
            <i class="fa fa-calendar infield"></i>
            <input name="checkin" type="text" id="checkin" value="{{$checkin }}" class="form-control" placeholder="Check-in" required autofocus/>
                 @if ($errors->has('checkin'))
                     <span class="help-block">
                       <strong>{{ $errors->first('checkin') }}</strong>
                     </span>
                   @endif
          </div>
          <div class="form-group">
            <label for="checkout">Check-out</label>
            <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
            <i class="fa fa-calendar infield"></i>
            <input name="checkout" type="text" id="checkout" value="{{$checkout}}" class="form-control" placeholder="Check-out" required autofocus/>
          </div>
          <div class="form-group">
            <div class="guests-select">
              <label>Guests</label>
              <i class="fa fa-user infield"></i>
              <div class="total form-control" id="test">1</div>
              <div class="guests">
                <div class="form-group adults">
                  <label for="adults">Adults</label>
                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="+18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                  <select name="adults" id="adults" class="form-control">
                    <option value="{{$adults}}" selected>{{$adults}}</option>
                    <option value="1">1 adults</option>
                    <option value="2">2 adults</option>
                    <option value="3">3 adults</option>
                  </select>
                </div>
                <div class="form-group children">
                  <label for="children">Children</label>
                  <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                  <select name="children" id="children" class="form-control">
                   <option value="{{ $child}}" selected>{{ $child}}</option>
                    <option value="0">0 children</option>
                    <option value="1">1 child</option>
                    <option value="2">2 children</option>
                    <option value="3">3 children</option>
                  </select>
                </div>
                <button type="button" class="btn btn-default button-save btn-block">Save</button>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary btn-block">Search</button>
        </form>
      
    </section>

    </div>
 

    <div class="col-md-9">
    
    <br><br> 
       
          

        

<table>


       
        <!-- Article Image-->
        @foreach($available as $avail)
        <form action="{{route('roomavailability.index')}}" method="get">
        
        
 <input name="checkin" type="hidden" id="checkin" value="{{$checkin }}" class="form-control" placeholder="Check-in" required autofocus/>
 <input name="checkout" type="hidden" id="checkout" value="{{$checkout}}" class="form-control" placeholder="Check-out" required autofocus/>
 <input name="adults" type="hidden" id="adults" value="{{$adults}}" class="form-control">
            
 <input name="children" type="hidden" value="{{$child}}" class="form-control">
 
        <tr>
        <td>
        <article> 
        <div class="col-md-4">
         <a href="#" class="mask"><img src="images/blog/940x344.gif" alt="image" class="img-responsive zoom-img"></a>
        </div>
        <div class="col-md-8">
          <div class="row">
            
            <div class="col-sm-11 col-xs-10 meta">
              
              <h2><a href="#">{{$avail->name}}</a><input type="hidden" name="hotelh" value="{{$avail->name}}"/></h2>
              <span class="meta-author">
              <i class="fa fa-user"></i>
             
             
              <a target="_blank" href="{{route('viewmap')}}">View Map</a>
              
              
              </span> 
              <span class="meta-category"><i class="fa fa-pencil"></i><a href="#">Hotel business</a></span> <span class="meta-comments"><i class="fa fa-comment"></i><a href="#">3 Comments</a></span>
              
              <p class="intro"> {{$avail->description}} </p>
              
            
              
              <button type="submit" class="btn btn-primary pull-right">See our available rooms</a> </div>
             
              </form>
          </div>
        </div> 
        </div>
           
        </article>  

        
         <h2 class="lined-heading"></h2>

        </td>
        </tr>
        
         @endforeach

         </table>
          
   </div>
   </div>   
 

<div class="container mt50">
  <div class="row"> 
    <!-- Slider -->
    
    
    <!-- Reservation form -->
        
    <!-- Room Content -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-sm-7 mt50">
            <h2 class="lined-heading"><span>Room Details</span></h2>
            <h3 class="mt50">Table overview</h3>
            <table class="table table-striped mt30">
              <tbody>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Double Bed</td>
                  <td><i class="fa fa-check-circle"></i> Free Internet</td>
                  <td><i class="fa fa-check-circle"></i> Free Newspaper</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> 60 square meter</td>
                  <td><i class="fa fa-check-circle"></i> Beach view</td>
                  <td><i class="fa fa-check-circle"></i> 2 persons</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Double Bed</td>
                  <td><i class="fa fa-check-circle"></i> Free Internet</td>
                  <td><i class="fa fa-check-circle"></i> Breakfast included</td>
                </tr>
                <tr>
                  <td><i class="fa fa-check-circle"></i> Private Balcony</td>
                  <td><i class="fa fa-check-circle"></i> Flat Screen TV</td>
                  <td><i class="fa fa-check-circle"></i> Jacuzzi</td>
                </tr>
              </tbody>
            </table>
            <p class="mt50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ligula nibh, cursus id euismod non, scelerisque nec nibh. Nam semper, ligula a rhoncus fermentum, libero lacus vulputate felis, id auctor mauris urna quis diam.</p>
          </div>
          <div class="col-sm-5 mt50">
            <h2 class="lined-heading"><span>Overview</span></h2>
            
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
              <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
              <li><a href="#facilities" data-toggle="tab">Facilities</a></li>
              <li><a href="#extra" data-toggle="tab">Extra</a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane fade in active" id="overview">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum eleifend augue, quis rhoncus purus fermentum. In hendrerit risus arcu, in eleifend metus dapibus varius. Nulla dolor sapien, laoreet vel tincidunt non, egestas non justo. Phasellus et mattis lectus, et gravida urna.</p>
                <p><img src="images/tab/197x147.gif" alt="food" class="pull-right"> Donec pretium sem non tincidunt iaculis. Nunc at pharetra eros, a varius leo. Mauris id hendrerit justo. Mauris egestas magna vitae nisi ultricies semper. Nam vitae suscipit magna. Nam et felis nulla. Ut nec magna tortor. Nulla dolor sapien, laoreet vel tincidunt non, egestas non justo. </p>
              </div>
              <div class="tab-pane fade" id="facilities">Phasellus sodales justo felis, a vestibulum risus mattis vitae. Aliquam vitae varius elit, non facilisis massa. Vestibulum luctus diam mollis gravida bibendum. Aliquam mattis velit dolor, sit amet semper erat auctor vel. Integer auctor in dui ac vehicula. Integer fermentum nunc ut arcu feugiat, nec placerat nunc tincidunt. Pellentesque in massa eu augue placerat cursus sed quis magna.</div>
              <div class="tab-pane fade" id="extra">Aa vestibulum risus mattis vitae. Aliquam vitae varius elit, non facilisis massa. Vestibulum luctus diam mollis gravida bibendum. Aliquam mattis velit dolor, sit amet semper erat auctor vel. Integer auctor in dui ac vehicula. Integer fermentum nunc ut arcu feugiat, nec placerat nunc tincidunt. Pellentesque in massa eu augue placerat cursus sed quis magna.</div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<!-- Other Rooms -->
<section class="rooms mt50">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="lined-heading"><span>Other rooms</span></h2>
      </div>
      <!-- Room -->
      <div class="col-sm-4">
        <div class="room-thumb"> <img src="images/rooms/356x228.gif" alt="room 1" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Double bedroom</h5>
              <div class="price">&euro; 99<span>a night</span></div>
            </div>
            <div class="content">
              <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                malesuada metus.</p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Private balcony</li>
                    <li><i class="fa fa-check-circle"></i> Sea view</li>
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Bathroom</li>
                  </ul>
                </div>
              </div>
              <a href="#" class="btn btn-primary btn-block">Book Now</a> </div>
          </div>
        </div>
      </div>
      <!-- Room -->
      <div class="col-sm-4">
        <div class="room-thumb"> <img src="images/rooms/356x228.gif" alt="room 2" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>King Size Bedroom </h5>
              <div class="price">&euro; 149<span>a night</span></div>
            </div>
            <div class="content">
              <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                malesuada metus.</p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Private balcony</li>
                    <li><i class="fa fa-check-circle"></i> Sea view</li>
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Bathroom</li>
                  </ul>
                </div>
              </div>
              <a href="room-detail.html" class="btn btn-primary btn-block">Book Now</a> </div>
          </div>
        </div>
      </div>
      <!-- Room -->
      <div class="col-sm-4">
        <div class="room-thumb"> <img src="images/rooms/356x228.gif" alt="room 3" class="img-responsive" />
          <div class="mask">
            <div class="main">
              <h5>Single room</h5>
              <div class="price">&euro; 120<span>a night</span></div>
            </div>
            <div class="content">
              <p><span>A modern hotel room in Star Hotel</span> Nunc tempor erat in magna pulvinar fermentum. Pellentesque scelerisque at leo nec vestibulum. 
                malesuada metus.</p>
              <div class="row">
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Private balcony</li>
                    <li><i class="fa fa-check-circle"></i> Sea view</li>
                  </ul>
                </div>
                <div class="col-xs-6">
                  <ul class="list-unstyled">
                    <li><i class="fa fa-check-circle"></i> Free Wi-Fi</li>
                    <li><i class="fa fa-check-circle"></i> Incl. breakfast</li>
                    <li><i class="fa fa-check-circle"></i> Bathroom</li>
                  </ul>
                </div>
              </div>
              <a href="#" class="btn btn-primary btn-block">Book Now</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






@include('userlayout.footer')