<?php
session_start();
include './Hubtel/Api.php'; 
require './vendor/autoload.php';


#txijtrnh
#hmgiyfdn
$auth = new BasicAuth("ulxdpkdj", "hbowjbzh");

   $phone = $_POST['phone'];
   $verify_num = $_POST['pin'];


  $phone =substr($phone, 1);
  $date = date("Y-m-d h:i:sa");   

$phone = "+233". $phone;
$vendor = "E-VoterApp"; 

// instance of ApiHost
$apiHost = new ApiHost($auth);

// instance of AccountApi
$accountApi = new AccountApi($apiHost);

// set web console logging to false
$disableConsoleLogging = false;

// Let us try to send some message
$messagingApi = new MessagingApi($apiHost, $disableConsoleLogging);
try {
    // Send a quick message
// $messageResponse = $messagingApi->sendQuickMessage("$ttg", "$phone", "Your order is been processed \n Order no. is $order_id \n invoice amount : $total on $date. Delivery team will call you soon. Thanks for shopping with TuaTuaGye ");

    $messageResponse = $messagingApi->sendQuickMessage("$vendor", "$phone", " Verification Pin \n $pin");

    if ($messageResponse instanceof MessageResponse) {
        echo $messageResponse->getStatus();
    } elseif ($messageResponse instanceof HttpResponse) {
        echo "\nServer Response Status : " . $messageResponse->getStatus();
    }
} catch (Exception $ex) {
    echo  $ex->getTraceAsString();
}

