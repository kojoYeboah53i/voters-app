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
        <style>
          .active{
            background-color: #23c79e;
          }
        </style>
        <div class="row">
        <div class="col-md-4" style="margin-top:20px;">
                        <div class="col-sm"> <div class="btn btn-block status active" id="president "><h4>President</h4></div></div>
                        <div class="col-sm"> <div class="btn btn-block status" id="v-president"><h4>Vice President</h4></div></div>
                        <div class="col-sm"> <div class="btn btn-block status" id="gen-sec"><h4>General Secretary</h4></div></div>
                        <div class="col-sm"> <div class="btn btn-block status"  id="fin-sec"><h4>Financial Secretary</h4></div></div>
                        <div class="col-sm"> <div class="btn btn-block status" id="por"><h4>Public Relations</h4></div></div>
                        <div class="col-sm"> <div class="btn btn-block status" id="gen-sec"><h4>General Organizer</h4></div></div>
                    </div>
                    <br>


        <div class="col-6 col-sm-3 col-md-4 "style="margin-top: 10px;">

        <div class="card mb-4 box-shadow">
          <div class="card-body one">
            <img src="./image/candidate-1.png" width="255" height="215" alt="" srcset="" >   
                   <h4 class="card-title pricing-card-title"> Adjoa Frimpong <br>
                      <small class="text-muted">Adjoa the leader</small></h4>
        <button type="button" class="btn btn-lg btn-block btn-outline-white add-vote one" style="display: none;">vote</button>
     <button type="button" class="btn btn-lg btn-block btn-primary" style="background: blue; color: white">Blue Team</button>
        
                    </div>
        </div>
   
        </div>
        <div class="col-6 col-sm-3 col-md-4 " style="margin-top: 10px;">

            <div class="card mb-4 box-shadow">
            <div class="card-body two">
                        <img src="./image/candidate-2.png" width="255" height="215" alt="" srcset="" >
                        <h4 class="card-title pricing-card-title"> Kofi Baboni <br>
                        <small class="text-muted">Kofi the Warrior</small></h4>
                <button type="button" class="btn btn-lg btn-block btn-outline-dark vote two" style="display: none;">vote</button>
                <button type="button" class="btn btn-lg btn-block btn-primary" style="background: #00ffff; color: white">Royal Team</button>
            </div>
            </div>

        </div>

        <br>
             <div class="col-6 col-sm-3 col-md-4 " style="margin-top: 10px;margin-left: 320px; margin-top: -3px;">

            <div class="card mb-4 box-shadow">
            <div class="card-body">
                        <img src="./image/candidate-3.png" width="255" height="215" alt="" srcset="" >
                    
                        <h4 class="card-title pricing-card-title"> Yaw Manu <br>
                            <small class="text-muted">Yaw the leader</small></h4>
                            <button type="button" class="btn btn-lg btn-block btn-outline-white add-vote one" style="display: none;">vote</button>
     <button type="button" class="btn btn-lg btn-block btn-primary" style="background: #FF00FF; color: white">Magenta Team</button>
        
            </div>
            </div>

            </div>
            <div class="col-6 col-sm-3 col-md-4 " style="margin-top: 10px;margin-left: 650px; margin-top: -399px;">

          <div class="card mb-4 box-shadow">
          <div class="card-body four">
                      <img src="./image/candidate-4.png" width="255" height="215" alt="" srcset="" >
                  
                      <h4 class="card-title pricing-card-title"> Efia Mensah <br>
                          <small class="text-muted">Efia the leader</small></h4>
                          <button type="button" class="btn btn-lg btn-block btn-outline-white add-vote four" style="display: none;">vote</button>
          <button type="button" class="btn btn-lg btn-block btn-primary" style="background: #FFD700; color: white">Gold Team</button>

          </div>
          </div>

          </div>







            <style>
                  .this-candidate, .this-team{

                    display: flex;
                    align-items: center;
                    justify-content: center;
                    background: #aaa;
                    margin: 20px 0;
                    padding: 10px;
                    width: 100%;
                    border: 2px #ccc solid;

                    }


                    @media (min-width: 768px) {
                    html {
                        font-size: 16px;
                    }
                    }

                    .container {
                    max-width: 960px;
                    }

                    .board-header {
                    max-width: 700px;
                    }

                    .card-deck .card {
                    min-width: 220px;
                    }

                    .border-top { border-top: 1px solid #e5e5e5; }
                    .border-bottom { border-bottom: 1px solid #e5e5e5; }

                    .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }

                                </style>

      </div>        



 

    </div>
<div class="col-sm" style="height: 400px;">

</div>
 

      <script src="./src/jquery.js"></script>
      <script src="./src/bootstrap.js"></script>
      <script src="./src/main.js"></script>
      
      
</body>
</html>