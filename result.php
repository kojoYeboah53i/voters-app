<?php

session_start();

if(!isset($_SESSION['user_in'])){

    
    header('location: index.html');
} 
if($_SESSION['verify'] == false){

  header('location: verify.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voters-app</title>
    <link rel="stylesheet" href="./src/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./src/style.css">
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
                            <a class="btn btn-lg btn-secondary" href="vote.php"><span class="glyphicon glyphicon-hand-left">Core Members</span></a>
                            <a class="btn btn-lg btn-secondary" href="result.php"> <span class="glyphicon glyphicon-hand-left">Result</span></a>
                        </div>
                    </div>

        
                </div>
            </div>
        </div>
      <div class="containter-fluid origin">
        <style>
          .active{
            background-color: #23c79e;
          }
        </style>
        <div class="row">
        <div class="col-md-4" style="margin-top:20px;">
                        <div class="col-sm"> <div class="btn btn-block status president active" id=" "><h4>President</h4></div></div>
                        <div class="col-sm"> <div class="btn btn-block status v-president" id="v-president"><h4>Vice President</h4></div></div>
                        <div class="col-sm"> <div class="btn btn-block status gen-sec" id="gen-sec"><h4>General Secretary</h4></div></div>
                        <div class="col-sm"> <div class="btn btn-block status fin-sec"  id="fin-sec"><h4>Financial Secretary</h4></div></div>
                        <div class="col-sm"> <div class="btn btn-block status por" id="por"><h4>Public Relations</h4></div></div>
                        <div class="col-sm"> <div class="btn btn-block status gen-sec" id="gen-sec"><h4>General Organizer</h4></div></div>
                    </div>
                    <br>

        <div class="container app-engine">
           
                  <div class="col-lg " style="margin-top: 10px;">
                    <div class="container">
                     <center>
                     <h2 style="color: #23c79e;">
                       Voting Results 
                      </h2>
                      <br>
                      <center><h3 style = "color:rgb(42, 151, 153);">Presidental Elections</h3></center>

                     </center> 
                      
                      <div class="col-12 col-sm-6 col-lg-8 display-result" style="margin-left: 200px;">
                        <div class="col-sm candidate-container" >
                            <div class="col-sm">
                                <br><img src="./image/candidate-1.png" alt="" srcset=""></div>
                            <br>
                            <div class="col-sm">
                                <div class="col-sm poll-data" >
                                <h4>   Adjoa Frimpong <br> #Total No. Votes : 15 <br> </h4>
                             <span "> <button class="btn btn-dark"style="background-color:blue;"> <h4 >Blue Team </h4></button></span>
                                
                                <div class="progress" style="margin-top: 30px;">
                                  <div class="progress-bar" role="progressbar style = color:rgb(42, 151, 153);" 
                                  aria-valuemin="0" aria-valuemax="100" style="width: 40%; background-color:rgb(42, 151, 153);">
                                  </div>
                            </div>
                                </div>
                     
                        </div></div>
                        <br>
                        <div class="col-sm candidate-container" >
                            <div class="col-sm">
                                <br><img src="./image/candidate-2.png" alt="" srcset=""></div>
                            <br>
                            <div class="col-sm">
                                <div class="col-sm poll-data" >
                                <h4>    Kofi Baboni <br> #Total No. Votes : 15 <br> </h4>
                             <span style="color:#00ffff;"> <h4>Royal Team </h4></span>
                                <div class="progress" style="margin-top: 30px;">
                                  <div class="progress-bar" role="progressbar style = color:rgb(42, 151, 153);" 
                                  aria-valuemin="0" aria-valuemax="100" style="width: 40%; background-color:rgb(42, 151, 153);">
                                  </div>
                            </div>
                                </div>
                     
                        </div></div>
                        <br>
                        <div class="col-sm candidate-container" >
                            <div class="col-sm">
                                <br><img src="./image/candidate-3.png" alt="" srcset=""></div>
                            <br>
                            <div class="col-sm">
                                <div class="col-sm poll-data" >
                                <br> #Total No. Votes : 15
                                
                                <div class="progress" style="margin-top: 30px;">
                                  <div class="progress-bar" role="progressbar style = color:rgb(42, 151, 153);" 
                                  aria-valuemin="0" aria-valuemax="100" style="width: 40%; background-color:rgb(42, 151, 153);">
                                  </div>
                            </div>
                                </div>
                     
                        </div></div>
                        <br>
                        <div class="col-sm candidate-container" >
                            <div class="col-sm">
                                <br><img src="./image/candidate-4.png" alt="" srcset=""></div>
                            <br>
                            <div class="col-sm">
                                <div class="col-sm poll-data" >
                                Adjoa Frimpong <br> #Total No. Votes : 15
                                
                                <div class="progress" style="margin-top: 30px;">
                                  <div class="progress-bar" role="progressbar style = color:rgb(42, 151, 153);" 
                                  aria-valuemin="0" aria-valuemax="100" style="width: 40%; background-color:rgb(42, 151, 153);">
                                  </div>
                            </div>
                                </div>
                     
                        </div></div>
           
                    </div>
                   

                    </div>
                        

     




    </div>

    <footer class="footer" style="visibility: hidden;">
        <div class="container">
          <span class="text-muted"> created by yours truly, Isaac Yeboah</span>
        </div>
      </footer> 

      <script src="./src/jquery.js"></script>
      <script src="./src/bootstrap.js"></script>
      <script src="./src/main.js"></script>
      
      
</body>
</html>