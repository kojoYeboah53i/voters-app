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
                    <div class="container result-buttons">
                        <div class="row">
                        <div class="col-6 col-md-4"> <div class="btn btn-secondary core-members status ">Core Members</div></div>
                        <div class="col-6 col-md-4"> <div class="btn btn-secondary election-resul status">Results</div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container app-engine">
                <div class="row">

                    <div class="col-md-4" style="margin-top:20px;">
                        <div class="col-sm"> <div class="btn btn-block status" id="president"><h3>President</h3></div></div>
                        <div class="col-sm"> <div class="btn btn-block status" id="v-president"><h3>Vice President</h3></div></div>
                        <div class="col-sm"> <div class="btn btn-block status" id="gen-sec"><h3>General Secretary</h3></div></div>
                        <div class="col-sm"> <div class="btn btn-block status"  id="fin-sec"><h3>Financial Secretary</h3></div></div>
                        <div class="col-sm"> <div class="btn btn-block status" id="por"><h3>Public Relations</h3></div></div>
                        <div class="col-sm"> <div class="btn btn-block status" id="gen-sec"><h3>General Organizer</h3></div></div>
                        <div class="col-sm"> <div class="btn btn-block status" id="cor-sec"><h3>Cordinating Secretary</h3></div></div>
                    </div>
                    <br>
                    <div class="col-6 col-sm-3 col-md-4 " style="margin-top: 10px; ">
                        <div class="card-body">
                 <img src="./image/candidate-1.png" width="305" height="245" alt="" srcset="" >
                   
                 <h4 class="card-title pricing-card-title"> Adjoa Frimpong <br>
                    <small class="text-muted">Adjoa the leader</small></h4>
            
                        <button type="button"  class="btn cta  btn-lg btn-block   " id="Adjoa"style="background: blue; color: white">Blue team</button>
                      </div>
                        </div>
                        <div class="col-6 col-sm-3 col-md-4 " style="margin-top: 10px; ">
                            <div class="card-body">
                                <img src="./image/candidate-2.png" width="305" height="245" alt="" srcset="">
                       
                     <h4 class="card-title pricing-card-title"> Kofi Baboni <br>
                        <small class="text-muted">Kofi the Warrior</small></h4>
                
                            <button type="button"  class="btn cta  btn-lg btn-block"  id="kofi-b"style="background:#00ffff; color: white">Royal team</button>
                          </div>
                            </div>
              
                    
                    <div class="col-6 col-sm-3 col-md-4 " style="margin-left: 360px; margin-top: -134px;">
                    <div class="hoverme ">

                         <div class="card-body" >
                                    <img src="./image/candidate-3.png" style="z-index: -1;"  width="305" height="245" alt="" srcset="">
                           
                         <h4 class="card-title pricing-card-title"> Yaw Manu <br>
                            <small class="text-muted">Yaw the leader</small></h4>
                            <br><br>
                                <button type="button"  class="btn btn btn-block vote  " 
                                 style="  "><h1>#vote</h1></button>
                                <button type="button"  class="btn btn-lg btn-block team " 
                                 id="yaw-team" style="background:  #FF00FF; color: white">Magenta Team</button>
                              </div>
                              </div>
                                </div>
                       
                                <div class="col-6 col-sm-3 col-md-4  " style="margin-left: 1px; margin-top: -134px;">
                                    <div class="card-body">
                                               <img src="./image/candidate-4.png" width="305" height="245" alt="" srcset="">
                                      
                                <h4 class="card-title pricing-card-title"> Efia Mensah <br>
                                 <small class="text-muted">Efia the leader</small></h4>
                               <button type="button"  class="btn cta  btn-lg btn-block   " id="shop-now"style="background: #FFD700; color: white">Gold Team</button>
                                         </div>
                                           </div>
                   
                        </div>
                    </div>
                        



 

    </div>
<div class="col-sm" style="height: 400px;">

</div>
 

      <script src="./src/jquery.js"></script>
      <script src="./src/bootstrap.js"></script>
      <script src="./src/main.js"></script>
      
      
</body>
</html>