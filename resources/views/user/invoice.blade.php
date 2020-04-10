@extends('userlayout.master')



<div id="top-header">
  <div class="container">
    <div class="row">
      <div class="col-xs-6">
        <div class="th-text pull-left">
          <div class="th-item"> <a href="#"><i class="fa fa-phone"></i> 05-460789986</a> </div>
          <div class="th-item"> <a href="#"><i class="fa fa-envelope"></i> MAIL@STARHOTEL.COM </a></div>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="th-text pull-right">
          <div class="th-item">
            <div class="btn-group">
              <button class="btn btn-default btn-xs dropdown-toggle js-activated" type="button" data-toggle="dropdown"> English <span class="caret"></span> </button>
              <ul class="dropdown-menu">
                <li> <a href="#">ENGLISH</a> </li>
                <li> <a href="#">FRANCE</a> </li>
                <li> <a href="#">GERMAN</a> </li>
                <li> <a href="#">SPANISH</a> </li>
              </ul>
            </div>
          </div>
          <div class="th-item">
            <div class="social-icons"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-youtube-play"></i></a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Header -->
<header>
  <!-- Navigation -->
 
    <div class="container">
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="/" class="navbar-brand">         
        <!-- Logo -->
        <div id="logo"> <img id="default-logo" src="images/logo.png" alt="Starhotel" style="height:44px;"> <img id="retina-logo" src="images/logo-retina.png" alt="Starhotel" style="height:44px;"> </div>
        </a> </div>
      <div id="navbar-collapse-grid" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="dropdown active"> <a href="#">Accomodations</a>
          </li>
		            </div>
              </div>
            </div>
          </li>
         
          
          </li>
        </ul>
      </div>
    </div>
  
</header>



<br>
<div class="container">
<div class="row">

<div id="payb">
<div class="col-md-5 col-md-offset-4">

     <button type="submit" onclick="payFunction()" class="btn btn-success">Pay Now</button>


      <button type="submit" onclick="myFunction()" class="btn btn-primary">Pay on Arrival</button>
</div>

</div> </div> </div>  
<br>
<div id="showselect">
<div class="container">
<div class="col-md-5 col-md-offset-4">



	 <form method="POST" role="form" action="{!! URL::route('paypal.paypal') !!}" >
		{{ csrf_field() }}

		<input id="name" type="hidden" class="form-control" name="name" value=" {{$hotel}} {{$type}}" >

		 <input id="name" type="hidden" class="form-control" name="quantity" value=" {{ $tprice / $rooms }}" >
		<input id="amount" type="hidden" class="form-control" name="amount" value="{{ $tprice }} " >

  <div id="pmt">
		<h3>Select your payment method</h3>

       <select class="form-control" name="paymentmethod" id="selectpay" onchange="myselect()">
        <option>Select Payment Method</option>
        <option value="Paypal">Paypal Express Checkout</option>
        <option value="MPESA">MPESA</option>
      </select>
  </div>
    </div> 
    </div> </div>  
  <br>

    <div class="pull-right">
    <div id="showsubmit">
    <div class="container">
    <div class="col-md-5 col-md-offset-4">
       <button type="submit" class="btn btn-success" id="sbtn">Checkout</button>
       
    </div></div></div></div>


</form>  
<div class="pull-right">
<div class="col-md-5 col-md-offset-4">
<div class="container">
  <!-- <div class="col-md-5 col-md-offset-4"> -->
    <button type="submit" class="btn btn-success" id="mbtn" data-toggle="modal" data-target="#exampleModal">Checkout</button>

   </div></div></div>



<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-xs-10 col-md-offset-1">
    		<div class="invoice-title">
    			<h2>Invoice</h2><h3 class="pull-right">Booking # {{$bookd->bookref}}</h3>

    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
                        {{$fname}} {{$lname}}<br>
    					{{$phone}}<br>
    					
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Payment Status:</strong><br>
    					{{$bookd->status}}<br>
    					
    					
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
                        {{$bookd->pmethod}}<br>
    					
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
                        {{$mytime->toDayDateTimeString()}}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-10 col-md-offset-1">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Booking summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Hotel</strong></td>
                                    <td class="text-center"><strong>No of rooms</strong></td>
        							<td class="text-center"><strong>Room Type</strong></td>
                                    
        							<td class="text-center"><strong>Check in</strong></td>
                                    <td class="text-center"><strong>Check out</strong></td>
        							<td class="text-right"><strong>Total</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								
    								<td >{{$hotel}}</td>
    								<td class="text-center">{{$rooms}} </td>
                                    <td class="text-center">{{$type}}</td>
    								<td class="text-center">{{$checkin}}</td>
                                    <td class="text-center">{{$checkout}}</td>
                                    <td class="text-right">{{$tprice}}</td>
    							</tr>
                                
    							
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>

<div class="col-md-5 col-md-offset-5">
    <button type="button" onclick="window.print();" class="btn btn-success"><i class="fa fa-print"></i></button>
    <button type="button" class="btn btn-info"><i class="fa fa-file-pdf-o"></i></button>
</div>    


<form action="{{route('checkoutt')}}" method="POST">
{{csrf_field()}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MPESA Check-out</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Customer Names:</label>
            <input type="text" class="form-control" name="customername" value=" {{$fname}} {{$lname}}" readonly>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">MPESA Mobile no:</label>
            <input type="text" class="form-control" name="mobileno" value=" {{$phone}} ">
          </div>
          <input type="text" name="bookref" value="{{$bookd->bookref}}"/>
          <input type="hidden" name="amount" value="{{$tprice}}">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">PAY</button>
      </div>
    </div>
  </div>
</div>

</form>


@include('userlayout.footer')


<script>
function myFunction() {

    if(confirm("Are you sure you want to pay at arrival?")){
        var x = document.getElementById("payb");
        var y = document.getElementById("pmt");
        var a = document.getElementById("sbtn");
        var b = document.getElementById("mbtn");


            x.style.display = "none";
            y.style.display = "none";
            a.style.display = "none";
            b.style.display = "none";




    }else{
        var x = document.getElementById("payb");
        var y = document.getElementById("pmt");
           x.style.display = "block";
           y.style.display ="none";

    }
}
</script>
<script>
var x = document.getElementById("showselect");
    
 x.style.display = 'none';
</script>

<script>
function payFunction() {
    
    var x = document.getElementById("showselect");
    
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>

<script>

   var x = document.getElementById("sbtn");
    
    x.style.display = 'none';
</script>

<script>
  var y = document.getElementById("cmbtn");
  var z = document.getElementById("mbtn");
 
  z.style.display = 'none';
  y.style.display = 'none';
</script>

<script>
    function myselect() {
        var x = document.getElementById("selectpay").value;
        var y = document.getElementById("sbtn");
		var z = document.getElementById("mbtn");

        if( x === 'Paypal'){
             y.style.display = "block";
             z.style.display = "none";
        }
		else if(x === 'MPESA'){
        
		  z.style.display = "block";
		  y.style.display = "none";
          


		}
		
		else{
            y.style.display = "none";
            z.style.display = "none";

        }
       
    }
</script>