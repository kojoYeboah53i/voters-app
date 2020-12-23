<?php



/*********************
 * login function
/*********************/
function login_user(){
include 'db.php';

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