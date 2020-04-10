<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use STKPush;
use App\Http\Controllers\AfricasTalkingGateway;
class CheckoutController extends Controller
{
    //
    public function index(Request $request){
      
            //return $request->all();
            
//Specify your credentials
$username = "sandbox";
$apiKey   = "b242acd772a5971429b16186405bf5e54c059cfffedfc2b8684c887339e12f36";
$gateway  = new AfricasTalkingGateway($username, $apiKey, "sandbox");
//Create an instance of our awesome gateway class and pass your credentials
//$gateway = new AfricasTalkingGateway($username, $apiKey);
/*************************************************************************************
 NOTE: If connecting to the sandbox:
 1. Use "sandbox" as the username
 2. Use the apiKey generated from your sandbox application
    https://account.africastalking.com/apps/sandbox/settings/key
 3. Add the "sandbox" flag to the constructor
 
**************************************************************************************/
// Specify the name of your Africa's Talking payment product
$productName  = $request['customername'];
// The phone number of the customer checking out
$phoneNumber  = $request['mobileno'];
// The 3-Letter ISO currency code for the checkout amount
$currencyCode = "KES";
// The checkout amount
$amount = $request['amount'];
// Any metadata that you would like to send along with this request
// This metadata will be  included when we send back the final payment notification
$metadata     = array("agentId"   => "525900",
                      "productId" => "2530");
try {
  // Initiate the checkout. If successful, you will get back a transactionId
  $transactionId = $gateway->initiateMobilePaymentCheckout($productName,
                               $phoneNumber,
                               $currencyCode,
                               $amount,
                               $metadata);
  return "The id here is ".$transactionId;
}
catch(AfricasTalkingGatewayException $e){
  echo "Received error response: ".$e->getMessage();
}
    }

}
