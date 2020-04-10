<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\mpesa;
use App\Http\Controllers\oath;
use App\mpesapayment;





class mpesacontroller extends Controller
{
    //
      public function checkstatus(Request $request){

          $merchant = $request->input('merchantid');
          $CheckoutRequestID = $request->input('checkoutid');

          $Mpesa = new Mpesa();

          $timestamp = date("Ymdhis");
          $password = base64_encode("174379"."bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919".$timestamp);
          $confirmquery = $Mpesa->STKPushQuery("sandbox", $CheckoutRequestID, "174379", $password, $timestamp);

          $confirm = json_decode($confirmquery, true);

          $data['confirm'] = $confirm;
          $data['confirmquery'] = $confirmquery;
          //print_r($data);



          //  return view('user.paymentsuccess',$data)




          return view("user.checkstatus",$data);


      }

      public function check(Request $request){

          $mpesa= new Mpesa();

          $bookrefno = $request['bookref'];  //book reference no
          $customername =$request['customername'];  //customer name
          $paymethod = "MPESA";   //payment method
          $BusinessShortCode = 174379;
          $LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
          $TransactionType = "CustomerPayBillOnline";//Defaults to CustomerPayBillOnline
          $Amount = 10;//The amount to be transacted.
          $PartyA = $request['mobileno'];//The MSISDN sending the funds.
          $PartyB = 174379;//The organization shortcode receiving the funds
          $PhoneNumber = $request['mobileno'];//The MSISDN sending the funds.
          $CallBackURL = "http://35.196.227.230/booking/mpesa/checkoutt";
          $AccountReference = 0123;//Used with M-Pesa PayBills.
          $TransactionDesc = "Booking Fee";//A description of the transaction.
          $Remark = "okay";//Comments that are sent along with the transaction.

          $stkresponse=$mpesa->STKPushSimulation($BusinessShortCode, $LipaNaMpesaPasskey, $TransactionType,
                        $Amount, $PartyA, $PartyB, $PhoneNumber, $CallBackURL, $AccountReference,
                           $TransactionDesc, $Remark);






         // dd($stkresponse[MerchantRequestID]);



          $stkresponses = json_decode($stkresponse, true);

     //dd($stkresponses);
          


          if(isset($stkresponses['errorCode'])){

              return back();

          }else{

                   $User= new mpesapayment;
                   $User-> bookrefno = $bookrefno;
                   $User-> transactionId = $stkresponses['MerchantRequestID'];  //checkoutid
                   $User-> transactionPhoneNumber = $PhoneNumber;  //mobileno
                   $User-> transactionAmount= $Amount;       //amount
                  // $User-> transactionDate= $timestamp;      //current timestamp
                   $User-> transactionMpesaId = $stkresponses['MerchantRequestID'];  //merchantid
                   $User-> pay_method = $paymethod;  //merchantid
                   $User-> pay_description =$TransactionDesc;  //merchantid
                   $User-> customer_name = $customername;  //merchantid
                    $User->save();

          }

          $data['PhoneNumber']= $PhoneNumber;
          $data['stkresponse']= $stkresponse;
          $data['stkresponses']= $stkresponses;

        return view("user.paymentstatus",$data);
//

      }


      public function savetranscation(Request $request){

        //  $this->validate($request,[

         // ]);

         // $User= new room;
         // $User-> hotel = $request->hotel;
        //  $User-> description = $request-> rdescription;
        //  $User->save();

        //  return view('user.paymentsuccess',$data)



      }

}
