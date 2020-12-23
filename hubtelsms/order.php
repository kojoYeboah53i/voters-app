<?php
//include 'Hubtel/Api.php';
// Let us test the SDK

include './Hubtel/Api.php'; 
require './vendor/autoload.php';
require 'db.php';


#txijtrnh
#hmgiyfdn
$auth = new BasicAuth("ulxdpkdj", "hbowjbzh");

   $phone = $_GET['phone'];
//  // $id = $_POST['id'];
//     $phone = substr(  $phone, 1);
//     //echo $phone; echo "<br>";
  $verify_num =  rand();
  $verify_num = substr($verify_num, 5);
 
  $ttg = "TUATUA GYE";
 
  $id = isset($_SESSION['id'])?$_SESSION['id']:$_SERVER['REMOTE_ADDR'];
  
  $sql = "UPDATE order_ set verfiy = '$verify_num' WHERE phone = '$phone' " ;

    $result =  mysqli_query($connect, $sql);
    if ($result) {
  //
} else {
  echo "Error updating record: " . $connect->error;
}
 $phone =substr($phone, 1);
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
    $messageResponse = $messagingApi->sendQuickMessage("$ttg", "$phone", " $verify_num Please enter the pin for verify your order  ");

    if ($messageResponse instanceof MessageResponse) {
        echo $messageResponse->getStatus();
    } elseif ($messageResponse instanceof HttpResponse) {
        echo "\nServer Response Status : " . $messageResponse->getStatus();
    }
} catch (Exception $ex) {
     $ex->getTraceAsString();
}

