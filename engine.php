<?php



/*********************
 * login function
/*********************/
function login_user(){
include 'db.php';
include './hubtelsms/Hubtel/Api.php'; 
include './hubtelsms/vendor/autoload.php';
require './vendor/autoload.php';
require 'db.php';


$auth = new BasicAuth("ulxdpkdj", "hbowjbzh");

    extract($_POST);
    if(!empty($phone)){

                    $this_phone = mysqli_real_escape_string($con, $phone);
                    try {
              
                $result = mysqli_query($con, "SELECT * FROM  voters  ");
                if(!$result){
                 throw new Exception( " query wrong check syntax". mysqli_error($con));
                } else{
                    while($row = mysqli_fetch_array($result)){
                        extract($row);
                        if ($phone == $this_phone){
                             echo "successful";
                             $_SESSION['user_id'] = $user_id;

                                    /************* */
                                        //send otp 
                                    /************* */
                                        $phone =substr($phone, 1);
                                        $vendor = "E-VoterApp"; 
                            
                                        $phone = "+233". $phone;
                                        
                                        $apiHost = new ApiHost($auth);
                                        
                                        $accountApi = new AccountApi($apiHost);
                                        
                                        $disableConsoleLogging = false;
                                        
                                        $messagingApi = new MessagingApi($apiHost, $disableConsoleLogging);
                                        try {
                                            $messageResponse = $messagingApi->sendQuickMessage("$vendor", "$phone", " Verification Pin \n $verify_num");
                                        
                                            if ($messageResponse instanceof MessageResponse) {
                                                echo $messageResponse->getStatus();
                                            } elseif ($messageResponse instanceof HttpResponse) {
                                                echo "\nServer Response Status : " . $messageResponse->getStatus();
                                            }
                                        } catch (Exception $ex) {
                                            echo  $ex->getTraceAsString();
                                        }

                        } else echo "phone not found";
                    }
                }
        

            } catch (Exception $th) {
                //throw $th;
                echo $th->getMessage();
            }

     

    } else {
        echo "no phone number sent";
    }
    



}


/******************** */
    //Register
/******************** */

function register(){
    include 'db.php';

    include './hubtelsms/Hubtel/Api.php'; 
    include './hubtelsms/vendor/autoload.php';
    require './vendor/autoload.php';
    require 'db.php';
    
  
    $auth = new BasicAuth("ulxdpkdj", "hbowjbzh");
    extract($_POST);

    if(isset($phone)){

    
    
       $phone = $_POST['phone'];
         $verify_num =  rand();
        $verify_num = substr($verify_num, 4);

        /************** */
            //insert phone
        /************** */
        try {
    
        $result = mysqli_query($con, "INSERT INTO voters (firstname, phone, pin) Values ('$name', '$phone', '$verify_num')");
        if(!$result){
            throw new Exception("failed to insert new user" . mysqli_error($con));
        } else {
        $result = mysqli_query($con, "SELECT * FROM voters WHERE phone = $phone");
        if(!$result){
            echo "phone not found...!";
        } else {
            while($row = mysqli_fetch_array($result)){
                $_SESSION['user_id'] = $row['user_id'];
            }
        }

        }

            } catch (Exception $th) {
                echo $th->getMessage();
            }

            /************* */
            //send otp 
            /************* */
                $phone =substr($phone, 1);
                $vendor = "E-VoterApp"; 
      
                $phone = "+233". $phone;
                
                $apiHost = new ApiHost($auth);
                
                $accountApi = new AccountApi($apiHost);
                
                $disableConsoleLogging = false;
                
                $messagingApi = new MessagingApi($apiHost, $disableConsoleLogging);
                try {
                    $messageResponse = $messagingApi->sendQuickMessage("$vendor", "$phone", " Verification Pin \n $verify_num");
                
                    if ($messageResponse instanceof MessageResponse) {
                        echo $messageResponse->getStatus();
                    } elseif ($messageResponse instanceof HttpResponse) {
                        echo "\nServer Response Status : " . $messageResponse->getStatus();
                    }
                } catch (Exception $ex) {
                    echo  $ex->getTraceAsString();
                }
                
            }

            else {
                echo "no phone number entered..!";
            }

            }


            function verify_phone_(){
                include 'db.php';
                extract($_POST);

                if(isset($verify_num)){

                  $_SESSION['verify'] = false;
              
                  try {
              $result = mysqli_query($con, "SELECT * FROM voters WHERE pin = $verify_num  ");
              if(!$result) {  
              throw new Exception("this phone doesn't exit");
              } else { 
              $_SESSION['verify'] = true;
              throw new Exception("user is found"); 
              
              }
              
              } catch (Exception $th) {
               echo $th->getMessage();
              }
              
              exit();
              }  else echo "no phone number sent ";
              
              }