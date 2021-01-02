<?php

session_start();

// if(!isset($_SESSION['user_in'])){

    
//     header('location: index.html');
// } 
// if($_SESSION['verify'] == false){

//   header('location: verify.php');

// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voters-app</title>
    <link rel="stylesheet" href="./src/bootstrap.css">
    <link rel="stylesheet" href="./src/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container main">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand" href="#">XtraClass</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarsExample09">
              <ul class="navbar-nav mr-auto">
        
              </ul>
              <form class="form-inline my-2 my-md-0">
                <i class="fa fa-search my-search" ></i>
              </form>
              <a href="logout.php" type="button" class="this-login  btn btn-info" ><i class="fa fa-user" style="margin-right: 6px;"></i>Logout</a>
            </div>  
          </nav>
        <div class="container banner">
            <div class="row">
                <div class="col-md-6 inner-banner">
                    <p><h2>CCHN - Winneba</h2></p>
      <p class="lead">College of Community Health Nursing <br> 
                2020/21 Acadamic Year of Elections</p>

                <div class="col-md-12">
                        <div class="button-wrapper btn-container-left">
                            <a class="btn btn-lg btn-secondary" href="#"><span class="glyphicon glyphicon-hand-left">Core Members</span></a>
                            <a class="btn btn-lg btn-secondary" href="#"> <span class="glyphicon glyphicon-hand-left">Result</span></a>
                        </div>
                    </div>

        
                </div>
            </div>
        </div>
      <div class="containter-fluid origin">










      
      </div>        



 

    </div>
<div class="col-sm" style="height: 400px;">

</div>
 

      <script src="./src/jquery.js"></script>
      <script src="./src/bootstrap.js"></script>
      <script src="./src/main.js"></script>
      
      
</body>
</html>