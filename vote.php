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
                
              <a href="logout.php">    <button type="submit" class="this-login btn btn-info" ></button><i class="fa fa-user"  style="margin-right: 6px;"></i>Logot</button>
            </div>  </a>
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
              
                    
                    <div class="col-6 col-sm-3 col-md-4  " style="margin-left: 360px; margin-top: -134px;">
                         <div class="card-body">
                                    <img src="./image/candidate-3.png" width="305" height="245" alt="" srcset="">
                           
                         <h4 class="card-title pricing-card-title"> Yaw Manu <br>
                            <small class="text-muted">Yaw the leader</small></h4>
                    
                                <button type="button"  class="btn cta  btn-lg btn-block   "  id="shop-now"style="background:  #FF00FF; color: white">Magenta Team</button>
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
                        

                    <div class="modal fade" id="login_" tabindex="-1" role="dialog" aria-labelledby="login_" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header" style=" color: white; background-color: #23c79e;">
                              <h4 class="modal-title" id="myModalLabel"></h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body" style="background-color:   #0d0e0f;">
                              <h3 class="result" style="color: white"><span >LOGIN</span></h3>
                             <h4> <p class="login-box-msg" align="center" style="color: white"></p></h4>
                              <form id="login-form" enctype="multipart/form-data">
                      
              
                      
                                <div class="login-box-body" >
	
                                    <!-- </div> -->
                                    <div class="form-group">
                                        <label for="name" style=" color: white;">Enter your name</label>
                                        <input type="text" class="form-control " id="user" name="user"
                                            placeholder="name" >
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="phone" style=" color: white;">Enter your phone number</label>
                                        <input type="text" class="form-control" id="phone" name="phone">
                                    </div>
                                    
                                    </div>
                      
                      </form>
                      
                            </div>
                            <div class="modal-footer" style=" color: white; background-color: #23c79e;">
                              <button type="button" id="login" class="btn btn-primary " style=" color: white; background: black">Submit</button>
                            </div>
                          </div>
                        </div>
                      </div>



 

    </div>

 

      <script src="./src/jquery.js"></script>
      <script src="./src/bootstrap.js"></script>
      <script src="./src/main.js"></script>
      
      
</body>
</html>