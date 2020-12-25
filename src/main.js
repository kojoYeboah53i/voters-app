$(function () {
  // alert('hello world')
});


$('#president').click(function (e) { 
  e.preventDefault();
  alert('president')
});


;

/*********************
* user login
/*********************/

$('#login').click(function (e) { 
   e.preventDefault(); 

   var formdata = {
     name : $('#user').val(),
     phone : $('#phone').val()

   }

   console.log(formdata); 

$.ajax({
  type: "POST",
   url: "./route.php?func=login_user",
data: formdata,

beforeSend: function(){
  console.log("user is loggin ");

},

success: function(response, textStatus, jqXHR) {
   console.log(response);
 
   
    if (    response.indexOf("user_log_in_successful")  > -1 ){
    $('p.login-box-msg').css('background-color', 'green');
    $('p.login-box-msg').html(" login successful..!");
      setTimeout(() => {
        window.location = "./verify.php";
        
      }, 3000);
  } else{
    $('p.login-box-msg').css('background-color', 'red');
    $('p.login-box-msg').html(" phone not found");
  }

}



});



});

alert("fiel is working right");

$('#register-user').click(function (e) { 
  e.preventDefault(); 
  var formdata = {
  phone : $('#phone1').val(),
  name  : $('#name1').val()
    }

   $.ajax({
     type: "POST",
     url: "./route.php?func=register",
     dataType: "html",        
     data: formdata,
     beforeSend: function () {
       $('.msg-board-r').fadeIn();
       $('.msg-board-r h4').html("Loading..!");
       console.log("sending")


     },
      success: function (response) {
        console.log(response); 
        let json = response;
        json = $.parseJSON(json);
         console.log((json.new_user)); 
         console.log(json.data_received); 
         console.log(json.phone); 
        if (  json.new_user  > -1 ){
          $('.msg-board-r').fadeIn();
          $('button.msg-board-r').css('background-color', 'green');
          $('.msg-board-r h4').html("New user identified..!");
          $('.msg-board-r h4').html(" Registration successful..!");
    
        } else{
          $('.msg-board-r').fadeIn();

          $('button.msg-board-r').css('background-color', 'red');
          $('.msg-board-r h4').html(" Registration failed..!");


        }

        // if(json.data_received == 'yes'){
        //   $('.msg-board-r').fadeIn();
        //   $('button.msg-board-r').css('background-color', 'green');
        //   $('.msg-board-r h4').html("data recieved at the backend.!");

        // } else{
        //   $('.msg-board-r').fadeIn();
        //   $('button.msg-board-r').css('background-color', 'red');
        //   $('.msg-board-r h4').html("no data recieved at the backend.!");
        // }

        //default
        // setTimeout(() => {
        //   $('.msg-board-r').fadeOut();
        // }, 5000);
      }
   });
});


$('.verify').click(function (e) { 
  e.preventDefault();
  let verify_num = $('#pin').val();

  $.ajax({
    type: "post",
    url: "./route.php?func=verify_phone_",
    data: {verify_num : verify_num},
    beforeSend: function () {
      console.log("sending pin")
     console.log(verify_num)

    },
    success: function (response) {
      console.log(response)
      $('p.box-msg-v').html(response);
      if(response >= 20){
        window.location = "./vote.php";

        }

      
    }
  });
  
});


$('.vote').click(function (e) { 
  e.preventDefault();

  var formdata = {
    position : $('#position').val(),
    candidate : $('#candidate').val()
  }
  
  $.ajax({
    type: "post",
    url: "route.php?func=vote",
    data: formdata,
    beforeSend: function () {
      console.log("sending vote")
     console.log(formdata)

    },
    success: function (response) {
      console.log(response);
      $('p.box-msg-vote').html("voting successful");

    }
  });
});

$('#logout').click(function (e) { 
  e.preventDefault();
  alert(logout);
});