<?php
session_start();
if(!isset($_SESSION['user_in'])){

    
header('location: index.html');
}

$_SESSION['phone'] = $_GET['this_phone'];

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
                
                <button type="submit" class="this-login btn btn-info"  data-toggle="modal" data-target="#login_"><i class="fa fa-user"  style="margin-right: 6px;"></i>Login</button>
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
          <center> 
                <div class="row">
                <div class="col-md-4" style="margin-top:20px; height:300px;">
                </div>
                  <div class="col-6 col-md-4" style="margin-top: 100px;">

                  <div class="verify_box" id="verify" tabindex="-1" role="dialog" style="background-color: #ffff;  box-shadow: 0 2px 10px 1px rgba(0,0,0,.3);">
       
                  <div class="response btn btn-secondary btn-block" style="background-color: #23c79e; display: none;"> <h4></h4></div>
 
                  <form id="login-form" enctype="multipart/form-data"  style="outline: none;">
                  <h4 style="color: #23c79e;" >
                        Enter your verification pin
                      </h4>
  
                  <div class="container">
                    <br> 
                 
                  

                      <form class="form-signin verification-form" style="display: inline-flex;">
                        <input class="page-item pin"  id="first-box" type="text" 
                        style="width: 50px;  border : 4px solid #23c79e; height: 40px; margin: 3px; padding: 4px;">
                        <input class="page-item pin" id="second-box" type="text"  style="width: 50px;  border : 4px solid #23c79e; height: 40px; margin: 3px; padding: 4px;">
                        <input class="page-item pin" id="third-box" type="text"  style="width: 50px;  border : 4px solid #23c79e; height: 40px; margin: 3px; padding: 4px;">
                        <input class="page-item pin" id="fourth-box" type="text"  style="width: 50px;  border : 4px solid #23c79e; height: 40px; margin: 3px; padding: 4px;">
                        <!-- <input type="number" id="pin" class="form-control" placeholder="only enter numbers " required autofocus> -->
                        <br>
                  
                       
                        </form>


                    </div>
                    <div class="modal-footer" style=" color: white; ">
                  <div class="col-sm">
                    <button type="submit" class="btn btn-info verify-1" >Verify</button>
                  </div>
                </div>
          </form>
          
            
          </div>
          </div>
          </div>



          </center>





    
                   

                        

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