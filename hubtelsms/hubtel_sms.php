<?php
session_start();
include './Hubtel/Api.php'; 
require './vendor/autoload.php';
require 'db.php';


$auth = new BasicAuth("ulxdpkdj", "hbowjbzh");

   $phone = $_POST['phone'];
        $id_ = $_SESSION['user_id'];
  $verify_num =  rand();
  $verify_num = substr($verify_num, 4);
  echo "phone  " . $phone. "\n";
  // $phone =substr($phone, 1);
  $ttg = "TuaTua Gye";   
  echo "user id is" . $id_; 
                echo "\n";
       $lenght = strlen($id_);  
       echo "id lent is: ". $lenght;
      
              $sql = "UPDATE oc_user set code = '$verify_num', phone = '$phone' WHERE  user_id ='$id_' " ;

    $result =  mysqli_query($connect, $sql);
    if ($result) {
        echo "successfull...insert";
    }
             else {
                echo "Error updating oc_user record: " . mysqli_error($connect);
            }
 
  
  $sql = "UPDATE online_users set code = '$verify_num', phone = '$phone' WHERE  user ='$id_' " ;

    $result =  mysqli_query($connect, $sql);
    if ($result) {
  //
} else {
  echo "Error updating record: " . mysqli_error($connect);
}


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
    $messageResponse = $messagingApi->sendQuickMessage("$ttg", "$phone", " Verification Pin \n $verify_num");

    if ($messageResponse instanceof MessageResponse) {
        echo $messageResponse->getStatus();
    } elseif ($messageResponse instanceof HttpResponse) {
        echo "\nServer Response Status : " . $messageResponse->getStatus();
    }
} catch (Exception $ex) {
    echo  $ex->getTraceAsString();
}

