<?php
 session_start();
//include 'Hubtel/Api.php';
// Let us test the SDK

include './Hubtel/Api.php'; 
require './vendor/autoload.php';
require 'db.php';

$con = mysqli_connect('localhost', 'vxkgn0fmfwww', '3FebIsGd$ikT', 'TuaTuaGye Data');

#txijtrnh
#hmgiyfdn
$auth = new BasicAuth("ulxdpkdj", "hbowjbzh");

   $phone = $_POST['phone'];
//  // $id = $_POST['id'];
//     $phone = substr(  $phone, 1);
//     //echo $phone; echo "<br>";
  $verify_num =  rand();
  $verify_num = substr($verify_num, 4);
  $phone =substr($phone, 1);
  $ttg = "TUATUA GYE";
  


        

$phone = "+233". $phone;

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
    $messageResponse = $messagingApi->sendQuickMessage("$ttg", "$phone", "integrity \n $verify_num ");

    if ($messageResponse instanceof MessageResponse) {
        echo $messageResponse->getStatus();
    } elseif ($messageResponse instanceof HttpResponse) {
        echo "\nServer Response Status : " . $messageResponse->getStatus();
    }
} catch (Exception $ex) {
     $ex->getTraceAsString();
}

