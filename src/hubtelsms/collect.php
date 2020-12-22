<?php


include './Hubtel/Api.php'; 
require './vendor/autoload.php';
require 'db.php';

$auth = new BasicAuth("ulxdpkdj", "hbowjbzh");

//    $phone = $_GET['phone'];
  $cus = $_GET['customerID'];
  $amount = $_GET['amount'];
   
//      $freshjson  = file_get_contents("php://input");
//   $jsonDataEncoded =  json_decode($freshjson);

//   $amount = $amount;
//   $cus = $customerID;
 
 
  $ttg = "TUATUA GYE";
 
  $id = isset($_SESSION['id'])?$_SESSION['id']:$_SERVER['REMOTE_ADDR'];
  
  $name;
  $phone;
  $sql = "SELECT * FROM signups WHERE cus_id = '$cus' " ;

    $result =  mysqli_query($connect, $sql);
    if ($result) {
  //
            while ($row = mysqli_fetch_array($result)) {
                $phone = $row['phone_number'];
                $name = $row['name'];
            }
} else {
  echo "Error updating record: " . $connect->error;
}
//  $phone =substr($phone, 1);
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
    $messageResponse = $messagingApi->sendQuickMessage("$ttg", "$phone", "payment of Ghc $amount \r\n made of behave of $name continue to trade with tuatuagye");
    if ($messageResponse instanceof MessageResponse) {
        echo $messageResponse->getStatus();
    } elseif ($messageResponse instanceof HttpResponse) {
        echo "\nServer Response Status : " . $messageResponse->getStatus();
    }
} catch (Exception $ex) {
     $ex->getTraceAsString();
}

