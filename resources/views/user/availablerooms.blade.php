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

                <br><br><br><br>   <form class="reservation-vertical clearfix" role="form" method="post" name="reservationform" id="reservationform">
                    <h2 class="lined-heading"><span>Reservation</span></h2>

                    <div id="message"></div>
                    <!-- Error message display -->
                    <div class="form-group">
                        <label for="email" accesskey="E">Destination</label>
                        <input name="email" type="text" id="email" value="" class="form-control" placeholder="Select your destination"/>
                    </div>
                    <div class="form-group">
                        <select class="hidden" name="room" id="room">
                            <option selected="selected">Double Room</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="checkin">Check-in</label>
                        <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-In is from 11:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                        <i class="fa fa-calendar infield"></i>
                        <input name="checkin" type="text" id="checkin" value="{{$checkin}}" class="form-control" placeholder="Check-in"/>
                    </div>
                    <div class="form-group">
                        <label for="checkout">Check-out</label>
                        <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Check-out is from 12:00"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                        <i class="fa fa-calendar infield"></i>
                        <input name="checkout" type="text" id="checkout" value="{{$checkout}}" class="form-control" placeholder="Check-out"/>
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
                                        <option value="{{$adults}}">{{$adults}}</option>
                                        <option value="1">1 adult</option>
                                        <option value="2">2 adults</option>
                                        <option value="3">3 adults</option>
                                    </select>
                                </div>
                                <div class="form-group children">
                                    <label for="children">Children</label>
                                    <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="0 till 18 years"> <i class="fa fa-info-circle fa-lg"> </i> </div>
                                    <select name="children" id="children" class="form-control">
                                        <option value="{{$child}}">{{$child}}</option>
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

            @foreach($availableroom as $avail)
                <form action="{{route('book.index') }}" method="get">

                    <input name="checkin" type="hidden" id="checkin" value="{{$checkin}}" class="form-control" placeholder="Check-in" required autofocus/>
                    <input name="checkout" type="hidden" id="checkout" value="{{$checkout}}" class="form-control" placeholder="Check-out" required autofocus/>
                    <input name="adults" type="hidden" id="adults" value="{{$adults}}" class="form-control">

                    <input name="children" type="hidden" value="{{$child}}" class="form-control">
                    <input name="hotel" type="hidden" value="{{$hotel}}" class="form-control">


                    <br><br>
                    <table>
                        <tr>
                            <td>
                                <article>
                                    <div class="col-md-6">
                                        <a href="#" class="mask"><img src="images/blog/940x344.gif" alt="image" class="img-responsive zoom-img"></a>
                                        <br>

                                        <h4> Max Adults: {{$avail-> maxadults}}, Max Children: {{$avail->maxchildren}} </h4>


                                        <table>
                                            <tr>
                                                <td>
                                                    Rooms:
                                                </td>
                                                <td>
                                                    <select name="roomno" id="roomno">
                                                        @foreach($roomstaken as $roomst)
                                                            @if($roomst->hotel == $avail->hotel && $roomst->rtype  == $avail->type )
                                                                @for($i = 1; $i <=$avail->noofrooms - $roomst->trooms; $i++)
                                                                    <option value="{{$i}}" > {{$i}} { KSh {{$avail->dprice* $i}} }</option>
                                                                @endfor
                                                            @endif
                                                        @if($roomst->hotel != $avail->hotel && $roomst->rtype  != $avail->type )
                                                                @for($i = 1; $i<= $avail->noofrooms; $i++)
                                                                    <option value="{{$i}}" > {{$i}} { KSh {{$avail->dprice* $i}} }</option>
                                                                @endfor
                                                            @endif
                                                        @endforeach

                                                            @foreach($roomsnotbooked as $roomsnot)

                                                                @if($roomsnot->type == $avail->type )

                                                                    @for($i = 1; $i<= $avail->noofrooms; $i++)
                                                                        <option value="{{$i}}" > {{$i}} { KSh {{$avail->dprice* $i}} }</option>
                                                                    @endfor

                                                                @endif


                                                            @endforeach



                                                    </select>
                                                    <input type="hidden" name="roomup" id="roomup"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Meal Plans:
                                                </td>
                                                <td>
                                                    <select name="meal">

                                                        @foreach($meals as $meal)
                                                            <option value="{{$meal->type}}" id="mealchosen">{{$meal->type}} (KSH {{$meal->price }})</option>
                                                        @endforeach

                                                    </select>
                                                    *Person/Per Night

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Extra Bed</td>
                                                <td>
                                                    <select name="xbed">
                                                        <option>0</option>
                                                        <option>1</option>

                                                    </select></td>
                                            </tr>

                                        </table>





                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">

                                            <div class="col-sm-11 col-xs-10 meta">






                                                @foreach($roomstaken as $roomst)


                                             @if($roomst->hotel == $avail->hotel && $roomst->rtype  == $avail->type )

                                                 <input type="hidden" name="remainingrooms" value="{{$avail->noofrooms - $roomst->trooms}}"/>

                                                 @if($avail->noofrooms - $roomst->trooms == 0)  {{--if available rooms is zero--}}
                                                            <h2>{{$avail->type}}  Room not available</h2>
                                                     @else



                                                       <h2>{{$avail->type}}  ({{$avail->noofrooms - $roomst->trooms}} available)</h2><input type="hidden" name="type" value="{{$avail->type}}"/>
                                                        @endif
                                                 @endif
                                                @if($roomst->hotel != $avail->hotel && $roomst->rtype  != $avail->type )

                                                     <input type="hidden" name="rremainingrooms" value="{{$avail->noofrooms}}"/>

                                                     @if($avail->noofrooms  == 0)  {{--if available rooms is zero--}}
                                                         <h2> Room not available</h2>
                                                     @else



                                                    <h2>{{$avail->type}}  ({{$avail->noofrooms }} available)</h2>
                                                        <input type="hidden" name="type" value="{{$avail->type}}"/>

                                                    @endif
                                                    @endif




                                                @endforeach

                                                @foreach($roomsnotbooked as $roomsnot)

                                                        <input type="hidden" name="rrremainingrooms" value="{{$avail->noofrooms}}"/>

                                                    @if($roomsnot->type == $avail->type  )



                                                        <h2>{{$avail->type}}  ({{$avail->noofrooms }} available)</h2>
                                                        <input type="hidden" name="type" value="{{$avail->type}}"/>


                                                    @endif
                                                    @endforeach





                                                <span class="meta-author"><i class="fa fa-user"></i><a href="#">{{$avail->hotel}}</a></span> <span class="meta-category"><i class="fa fa-pencil"></i><a href="#">Hotel business</a></span> <span class="meta-comments"><i class="fa fa-comment"></i><a href="#">3 Comments</a></span>
                                                <p class="intro">{{$avail->rdescription}} </p>
                                                <button type="submit" class="btn btn-primary pull-right">BOOK</button> </div>
                                        </div>
                                    </div>
        </div>

        </article>
        </td>
        </tr>


        <h2 class="lined-heading"><span>Room Details</span></h2>

        <table class="table table-striped mt30">
            <tbody>
            <h3 class="mt50">Ammenities</h3>

            @foreach($ammenities as $ammen)

                <tr>
                    <td><i class="fa fa-check-circle"></i> {{$ammen->name}}</td>

                </tr>
            @endforeach
            </tbody>
        </table>


        <h2 class="lined-heading"></h2>
        </table>

        </form>
        @endforeach
    </div>


</div>





@include('userlayout.footer')

<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script>


    var roomno = document.getElementById('roomno').value;

    document.getElementById('roomup').value = roomno;


</script>

