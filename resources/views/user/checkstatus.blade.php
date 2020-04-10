<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Starhotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/owl.theme.css">
    <link rel="stylesheet" href="../css/prettyPhoto.css">
    <link rel="stylesheet" href="../css/smoothness/jquery-ui-1.10.4.custom.min.css">
    <link rel="stylesheet" href="../rs-plugin/css/settings.css">
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="../css/colors/turquoise.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600,700">

    <!-- Javascripts -->
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
    <script type="text/javascript" src="js/jquery.forms.js"></script>
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.gmap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="../rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="../rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


</head>

<body>

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

<div class="row">
    <div class="container">


            <h1>Processing payment...</h1>



         {{$confirmquery}}

        @if ( $confirm["ResultCode"] == "2001")
          <h4>Your payment has FAILED. The details provided to M-Pesa were invalid. Try again</h4>
            <a href="{{route('checkoutt')}}" class="btn btn-info" role="button">Try again</a>
        @elseif( $confirm["ResultCode"] == "1037")
            <h4>Your payment FAILED. The system has timed out. Try again</h4>
            <a href="{{route('checkoutt')}}" class="btn btn-info" role="button">Try again</a>
        @elseif( $confirm["ResultCode"] == "1001")
             <h4>Your payment is PROCESSING. A transaction is already in process. Check your phone for M-Pesa popup and enter your PIN.</h4>
        @elseif( $confirm["ResultCode"] == "1")
            <h4>Your payment has FAILED. The balance is insufficient for the transaction.</h4>
            <a href="{{route('checkoutt')}}" class="btn btn-info" role="button">Try again</a>
        @elseif( $confirm["ResultCode"] == "1032")
            <h4>Your payment has been CANCELLED. Try again</h4>

            <a href="{!! URL::previous() !!}" class="btn btn-info" role="button">Try again</a>




        @elseif( $confirm["ResultCode"] == "0")
            <h4>Payment made successfully</h4>


         @else
            <h4>Invalid request! The system failed to process your request. If the problem persists, please contact us.</h4>
            <a href="{{route('checkoutt')}}" class="btn btn-info" role="button">Try again</a>
        @endif




<br>










    </div>
</div>

<style>
    .invoice-title h2, .invoice-title h3 {
        display: inline-block;
    }

    .table > tbody > tr > .no-line {
        border-top: none;
    }

    .table > thead > tr > .no-line {
        border-bottom: none;
    }

    .table > tbody > tr > .thick-line {
        border-top: 2px solid;
    }

</style>

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


<!-- Go-top Button -->
<div id="go-top"><i class="fa fa-angle-up fa-2x"></i></div>

</body>
</html>



@include('userlayout.footer')


