<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/img.css">

  <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/bower_components/bootstrap-daterangepicker/daterangepicker.css">
 

  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="/../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">

 

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
       
        @include('adminlayout.header.header')
        @include('adminlayout.sidebar.sidebar')

  
  
 
        <div class="content-wrapper">
         
         <section class="content-header">
           @yield('content-header')
         </section>

            <section class="content">
            
             @yield('content')

            </section>

     </div>
     

    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2017 <a href="#">...</a>.</strong> All rights
    reserved.
   </footer>

 
  <div class="control-sidebar-bg"></div>
</div>


<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/bower_components/raphael/raphael.min.js"></script>
<script src="/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/bower_components/moment/min/moment.min.js"></script>
<script src="/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<script>
  
    //Date picker
    var dateToday = new Date();
    $('#datepicker').datepicker('setEndDate' , new Date());
      

    
</script>
<script>
  
    //Date picker
    var dateToday = new Date();
    $('#datepicker1').datepicker('setEndDate' , new Date());

    
</script>
<script>
  
	 $('#date').datepicker( "setDate", new Date());
   $('#reservation').daterangepicker()

 </script>



  <script>
   $('#selectchange').on('change',function(e){
    $('#myvalue').val($(this).children(':selected').attr('surname'))
    $('#totald').val($(this).children(':selected').attr('tdeposit'))
    $('#trepayment').val($(this).children(':selected').attr('trepay'))

     
});

</script>



<script>
   $('#selectchangelr').on('change',function(e){
    
    $('#repayment').val($(this).children(':selected').attr('trepay'))
});

</script>

<script>
   $('#selectchange1').on('change',function(e){
   
    $('#myvalues').val($(this).children(':selected').attr('loand'))
    $('#myvalues1').val($(this).children(':selected').attr('interest'))
    $('#myvalues2').val($(this).children(':selected').attr('iperiod'))
    $('#myvalues3').val($(this).children(':selected').attr('depositratio'))
});

</script>

<script>
   $('#selectchange1').on('change',function(e){
    $('#trepayment').val($(this).children(':selected').attr('lre'))
   

     
});

</script>

<script>
   $('#selectchange2').on('change',function(e){
   
    $('#myvalues').val($(this).children(':selected').attr('loand'))
});
</script>

<script>
   $('#selectchangem').on('change',function(e){
   
    $('#mvalue').val($(this).children(':selected').attr('logbd'))
    $('#mvalu').val($(this).children(':selected').attr('mno'))


});

</script>

<script>
   $('#selectchangekin').on('change',function(e){
   
    $('#surname').val($(this).children(':selected').attr('surname'))
    $('#relationship').val($(this).children(':selected').attr('Relationship'))

});

</script>

<script>
   $('#selectchangela').on('change',function(e){
   
    $('#tloanap').val($(this).children(':selected').attr('totalla'))

});

</script>

<script>
 
  $('input').keyup(function () {
    
    $('[name="lbalance"]').val(parseFloat("0"+$('#tloanap').val()) - parseFloat("0"+$('#trepayment').val()) );

    
    
    $('[name="samount"]').val(parseFloat("0"+$('#totald').val()) * parseFloat("0"+$('#myvalues3').val())
    - parseFloat("0"+$('#loanb').val()) );

    $('[name="lrecom"]').val(parseFloat("0"+$('#totald').val()) * parseFloat("0"+$('#myvalues3').val())
    - parseFloat("0"+$('#loanb').val()) );
    
    $('[name="repayment"]').val(parseFloat("0"+$('#damount').val()) / parseFloat("0"+$('#myvalues2').val())
     );

    
    
});
 
 </script>

<script>
function handleselect(){

   var selectindex = document.getElementById('gender').value;
   var marital = document.getElementById('selectchanges').value;

   if( selectindex === 'Male') {

     var male = document.getElementById('sal').value="Mr.";

   }
  if( selectindex === 'Female' && marital === 'Single'){

    var female = document.getElementById('sal').value="Ms.";
  }
  if( selectindex === 'Female' && marital === 'Married'){

    var female = document.getElementById('sal').value="Mrs.";
  }


}
</script>

<script>
function handleselect1(){

   var selectindex = document.getElementById('gender').value;
   var marital = document.getElementById('selectchanges').value;

   if( selectindex === 'Male') {

     var male = document.getElementById('sal').value="Mr.";

   }
  if( selectindex === 'Female' && marital === 'Single'){

    var female = document.getElementById('sal').value="Ms.";
  }
  if( selectindex === 'Female' && marital === 'Married'){

    var female = document.getElementById('sal').value="Mrs.";
  }


}
</script>

<script>
function handleselectr(){

   var selectindex = document.getElementById('rmethod').value;
  

   if( selectindex === 'StraightLine') {

    

     var interest = document.getElementById('damount').value * document.getElementById('myvalues1').value/100 * 
                    document.getElementById('myvalues2').value/12 

     document.getElementById('monthint').value= interest;

   }
   else if(selectindex === 'Reducingbalance'){

    var interest = document.getElementById('loanb').value * document.getElementById('myvalues1').value/100 * 
                    document.getElementById('myvalues2').value/12 

     document.getElementById('monthint').value= interest;

   }

   else
   var interest = document.getElementById('damount').value * document.getElementById('myvalues1').value/100 * 
                    document.getElementById('myvalues2').value/12 

     document.getElementById('monthint').value= interest;


}
</script>

<script>
   $('#guarantorchange').on('change',function(e){
    $('#loantype').val($(this).children(':selected').attr('loantype'))
    $('#loanno').val($(this).children(':selected').attr('loano'))
    $('#mname').val($(this).children(':selected').attr('loansurname'))
    $('#amountg').val($(this).children(':selected').attr('aguaranteed'))
    $('#sdeposit').val($(this).children(':selected').attr('totalg'))

     
});

</script>



<script>
   $('#gchange').on('change',function(e){
    $('#gname').val($(this).children(':selected').attr('gname'))
    $('#gdeposit').val($(this).children(':selected').attr('tdeposit'))
    $('#gbalance').val($(this).children(':selected').attr('balance'))
    $('#ga').val($(this).children(':selected').attr('tdeposit'))
     
});

</script>



 
 <script src="/bower_components/select2/dist/js/select2.full.min.js"></script>

 <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2() 
  })
  </script> 

<script>
   $('#selectmatatu').on('change',function(e){
   
    $('#names').val($(this).children(':selected').attr('fullnames'))

});

</script>

<script>
function handleselectt(){

   var selectindex = document.getElementById('ttype').value;
   

  
  if(selectindex === 'Deposits' || selectindex === 'Sharecapital'  ||  selectindex === 'RejoiningFee'  ) {

    
    
     document.getElementById('mmb').disabled = true;
     
     document.getElementById('selectchangem').disabled = false;
     
   }
   else if(selectindex === 'Individualsavings'){

    
    
     
     document.getElementById('selectchangem').disabled = true;
     document.getElementById('mmb').disabled = false;
   }

   else if(selectindex === 'Registrationfee'){

     
    
     document.getElementById('selectchangem').disabled = false;
     document.getElementById('mmb').disabled = false;
   }
   else{
    document.getElementById('selectchangem').disabled = true;
    document.getElementById('mmb').disabled = true;
    
     document.getElementById('mmbr').disabled = false;

   }
    
}
</script>

<script>
   $('#mmbr').on('change',function(e){
    
    $('#loan').val($(this).children(':selected').attr('lno'))
    $('#ltype').val($(this).children(':selected').attr('ltype'))
    $('#tlonap').val($(this).children(':selected').attr('lapp'))
    $('#trepaymentt').val($(this).children(':selected').attr('tr'))
    $('#rate').val($(this).children(':selected').attr('r'))
  //  $('#rint').val($(this).children(':selected').attr('int'))
    
     
});

</script>
<script> //loanbalance
$('input').change(function () {
    
    $('[name="lbal"]').val(parseFloat("0"+$('#bint').val()) - parseFloat("0"+$('#trepaymentt').val()) 
    - parseFloat("0"+$('#ramount').val()));
  
  });
</script>

<script>  //balance + interest
$('input').change(function () {
    
    $('[name="bint"]').val(parseFloat("0"+$('#tlonap').val()) + parseFloat("0"+$('#rint').val()) );
    
  
  });
</script>

<script>
$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#img-upload").change(function(){
		    readURL(this);
		}); 
    	
	});
</script>


<script type="text/javascript">
$(document).ready(function(e){
       $('input').change(function(){
        var total=0;
       $("input[name=percent[]]").each(function(){
            total= total + parseInt($(this).val());
       })
         $('.total').val(total);
    });

});

</script>

</body>
</html>