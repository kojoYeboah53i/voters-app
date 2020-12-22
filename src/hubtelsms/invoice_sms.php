<?php
session_start();
include './Hubtel/Api.php'; 
require './vendor/autoload.php';
require 'db.php';


#txijtrnh
#hmgiyfdn
$auth = new BasicAuth("ulxdpkdj", "hbowjbzh");

   $phone = $_POST['phone'];
        $id_ = $_SESSION['user_id'];
  $verify_num =  rand();
  $verify_num = substr($verify_num, 4);
//   echo "phone  " . $phone. "\n";
  $phone =substr($phone, 1);
  $ttg = "TuaTua Gye";
  $date = date("Y-m-d h:i:sa");   

$phone = "+233". $phone;
extract($_POST);
// echo "money in your palm don't make u real";
echo $order_id; echo "\n". $total; echo "\n" .$date; 
 echo "\n"; echo $phone;

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

    $messageResponse = $messagingApi->sendQuickMessage("$ttg", "$phone", "Order confirmed. Order no. is $order_id. on $date. \n  Visit https://tuatuagye.com/order?id=$order_id  for delivery timelines. \n Delivery team will call you soon. Thanks for shopping with TuaTuaGye ");

    if ($messageResponse instanceof MessageResponse) {
        echo $messageResponse->getStatus();
    } elseif ($messageResponse instanceof HttpResponse) {
        echo "\nServer Response Status : " . $messageResponse->getStatus();
    }
} catch (Exception $ex) {
    echo  $ex->getTraceAsString();
}

