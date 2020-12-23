<?php
session_start();


/*********************
 * login function
/*********************/
function login_user(){
        echo "file found";

    include 'db.php';

    extract($_POST);
    if(!empty($phone)){
        echo "is ok";

        $this_phone = mysqli_real_escape_string($con, $phone);
            try {
                $result = mysqli_query($con, "SELECT * from  user where phone = '$this_phone");
                if(!$result){
                    throw new Exception("not found, user is not registered..!");
                } else{
                    echo "login successful...!";
                }
        

            } catch (Exception $th) {
                //throw $th;
                echo $th->getMessage();
            }
     

    } else {
        echo "no phone number sent";
    }
    



}