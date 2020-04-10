@extends('userlayout.master')

@include('userlayout.header')

<style>

/*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {
    margin: 0;
    padding: 0;
}

html {
    height: 100%;
    
}

body {
    font-family: montserrat, arial, verdana;
    background: transparent;
}


/*form styles*/
#msform {
    text-align: center;
    position: relative;
    margin-top: 30px;
    
   
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
    padding: 20px 30px;
    box-sizing: border-box;
    width: 80%;
    margin: 0 10%;

    /*stacking fieldsets above each other*/
    position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

/*inputs*/
#msform input, #msform textarea {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 13px;
}

#msform input:focus, #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #ee0979;
    outline-width: 0;
    transition: All 0.5s ease-in;
    -webkit-transition: All 0.5s ease-in;
    -moz-transition: All 0.5s ease-in;
    -o-transition: All 0.5s ease-in;
}

/*buttons*/
#msform .action-button {
    width: 100px;
    background: #ee0979;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
}

#msform .action-button-previous {
    width: 100px;
    background: #C5C5F1;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
}

/*headings*/
.fs-title {
    font-size: 18px;
    text-transform: uppercase;
    color: #2C3E50;
    margin-bottom: 10px;
    letter-spacing: 2px;
    font-weight: bold;
}

.fs-subtitle {
    font-weight: normal;
    font-size: 13px;
    color: #666;
    margin-bottom: 20px;
}

/*progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    /*CSS counters to number the steps*/
    counter-reset: step;
}

#progressbar li {
    list-style-type: none;
    color: white;
    text-transform: uppercase;
    font-size: 9px;
    width: 23.33%;
    float: left;
    position: relative;
    letter-spacing: 1px;
}

#progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 24px;
    height: 24px;
    line-height: 26px;
    display: block;
    font-size: 12px;
    color: #333;
    background: white;
    border-radius: 25px;
    margin: 0 auto 10px auto;
}

/*progressbar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: white;
    position: absolute;
    left: -50%;
    top: 9px;
    z-index: -1; /*put it behind the numbers*/
}

#progressbar li:first-child:after {
    /*connector not needed before the first step*/
    content: none;
}

/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before, #progressbar li.active:after {
    background: #ee0979;
    color: white;
}


/* Not relevant to this form */
.dme_link {
    margin-top: 30px;
    text-align: center;
}
.dme_link a {
    background: #FFF;
    font-weight: bold;
    color: #ee0979;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 5px 25px;
    font-size: 12px;
}

.dme_link a:hover, .dme_link a:focus {
    background: #C5C5F1;
    text-decoration: none;
}


</style>

<!-- MultiStep Form -->
<form id="msform" method="POST" action="{{route('book.store')}}" >
        {{ csrf_field() }}
<div class="row">

         <div class="col-md-5 col-md-offset-3">
                @if(Session::has('message'))
                     <div class="alert alert-success">
                        <ul>
                        <li>{{ Session::get('message') }}

                       
                         </li>
                        </ul>

                    </div>

                @endif
            </div>



    <div class="col-md-12 ">
       
            <!-- progressbar -->
           
            <ul id="progressbar">
                <li class="active">Selected Room</li>
                <li >Booking Details</li>
                
           
                
            </ul>
            
            <!-- fieldsets -->
            <fieldset>
                <h2 class="fs-title">Selected room</h2>
                
                <div class="box-body table-responsive no-padding">
            <table  id="example1" class="table table-bordered table-striped">
                    <tr>
                        <th>Hotel</th>
                        <th>Room type</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Nights</th>
                        
                        <th>Adult</th>
                        <th>Child</th>
                        <th colspan="2">Room(s) & Price</th>
                        <th colspan="2">Extra Bed & Price</th>
                        <th colspan="2">Meal Plans &Price</th>
                        
                    </tr>
                    
                    <tr>
                     
                     <td><input type="hidden" name="hotel" value="{{$bookd->hotel}}"/>{{$bookd->hotel}}</td>
                     <td><input type="hidden" name="type" value="{{$bookd->type}}"/>{{$bookd->type}}</td>
                     <td><input type="hidden" name="checkin" value="{{$checkins}}"/>{{$checkins}}</td>
                     <td><input type="hidden" name="checkout" value="{{$checkouts}}"/>{{$checkouts}}</td>
                     <td> <input type="hidden" name="days" value="{{$diff_in_days}}"/>{{$diff_in_days}}</td>
                     
                     <td> <input type="hidden" name="adults" value="{{$adults}}"/>{{$adults}}</td>
                     <td><input type="hidden" name="child" value="{{$child}}"/>{{$child}}</td>
                     <td> <input type="hidden" name="rooms" value="{{$rooms}}"/>{{$rooms }}</td>
                      <input type="hidden" name="roomup" value="{{$rooms}}"/>{{$rooms }}
                     <td> <input type="hidden" id="roomprice" value="{{$bookd->dprice * $rooms * $diff_in_days}}"/>Ksh{{$bookd->dprice * $rooms * $diff_in_days}}</td>
                     <td>{{$ebed}}</td>
                     <td><input type="hidden" id="extrabedprice" value="{{ 0 * $rooms}}"/>Ksh {{ 0 * $rooms}}</td>

                     

                     <td>{{$meal}}</td>
                     <td>@foreach($mealprice as $mealp) 
                     @if( $mealp->type == $meal)
                     <input type="hidden" id="mealprice" value="{{$mealp->price* $rooms }}"/> KSh{{ $mealp->price * $rooms }}</td>
                     @endif
                     @endforeach
                    
                    </tr>
                    <tr>
                     <tfoot>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td><b>Total<b></td>
                     <td colspan="2"><b><input type="text" name="tprice" id="total" class="form-control" readonly/><b></td>
                     
                     </tfoot>
                    </tr>
                    
                </table>

                </div>
     
               <input type="button" name="next" class="next action-button" value="Next"/>
                
            </fieldset>
            <fieldset>
                <h2 class="fs-title">Booking Details</h2>
                <h3 class="fs-subtitle">Tell us something more about you</h3>
                <div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
                  <input type="text" id="fname" name="fname" placeholder="First Name" value="{{ old('fname') }}" required autofocus/>

                         @if ($errors->has('fname'))
                             <span class="help-block">
                                <strong>{{ $errors->first('fname') }}</strong>
                              </span>
                          @endif
                </div>
                <input type="text" id="lname" name="lname" placeholder="Last Name" required autofocus/>
                <input type="text" name="phone" placeholder="Phone" required autofocus/>

                

                <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                <button type="submit"  class="btn btn-danger" >Confirm and checkout</button> 
            </fieldset>
            
         

            
            </form>
        
    </div>
</div>
<!-- /.MultiStep Form -->

<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script> 

<script>

 
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})
 </script>

<script>


var roomprice  = parseFloat(document.getElementById('roomprice').value) ;
var extrabed  = parseFloat(document.getElementById('extrabedprice').value);
var meal  = parseFloat(document.getElementById('mealprice').value);

var totalprice =  roomprice + extrabed + meal;                 

document.getElementById('total').value= totalprice;

</script>

<script>


var fname  = document.getElementById('fname').value ;
var lname  = document.getElementById('lname').value;
               

 document.getElementById('fulln').value= fname;
 document.getElementById('hfname').value= fname;
 document.getElementById('hlname').value= fname;

</script>


