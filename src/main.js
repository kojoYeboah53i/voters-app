$(function () {

  //console.log("main script file is working");
 
});




/************* */
  //auto focus at verify pin
/************* */

$('#first-box').keypress(function (e) { 
  console.log($('#first-box').val());
  $('#second-box').focus();
});

$('#fourth-box').keypress(function (e) { 
  console.log($('#fourth-box').val());
  $('#first-box').focus();
});
$('#second-box').keypress(function (e) { 
  console.log($('#second-box').val());
  $('#third-box').focus();
  
});

$('#third-box').keypress(function (e) { 
  $('#fourth-box').focus();
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

alert("this page is under construction come back in a few hours");

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
         if (  json.phone < -1 ){
          $('.msg-board-r').fadeIn();
          $('button.msg-board-r').css('background-color', 'red');
          $('.msg-board-r h4').html("Enter a valid phone e.g 024 XXX XXXX");
    
        } else if (json.phone >= -4 &&  json.phone < 1) {
          $('.msg-board-r').fadeIn();
          $('button.msg-board-r').css('background-color', 'red');
          $('.msg-board-r h4').html("phone already registered");
        

        }else {

        if (  json.new_user  > -1 ){
          $('.msg-board-r').fadeIn();
          $('button.msg-board-r').css('background-color', 'green');
          $('.msg-board-r h4').html(" Registration successful..!");
          console.log("verify pin" + json.pin)
          console.log("phone" + json.phone)
          send_otp(json.pin, json.phone);
    
        } 

      }

      }
   });
});


function send_otp(pin, phone_){

  if(pin != ""){

    var  FormData = {
      pin : pin,
      phone : phone_
    }


    $.ajax({
      type: "POST",
      url: "./route.php?func=send_otp",
      data: FormData,
      beforeSend: function () {
        console.log("sending otp") },
       success: function (response) {
         console.log(response); 
        //  window.location = './verify.php';
       }
    });

  } else console.log("no phone sent");

}


$('.verify').click(function (e) { 
  e.preventDefault();
  // let verify_num = $('#pin').val();
  var formdata = {
    first_box : $('#first-box').val(),
    second_box : $('#second-box').val(),
    third_box : $('#third-box').val(),
    fourth_box : $('#fourth-box').val()
  }

  console.log(formdata)

  // $.ajax({
  //   type: "post",
  //   url: "./route.php?func=verify_phone_",
  //   data: {verify_num : verify_num},
  //   beforeSend: function () {
  //     console.log("sending pin")
  //    console.log(verify_num)

  //   },
  //   success: function (response) {
  //     console.log(response)
  //     $('p.box-msg-v').html(response);
  //     if(response >= 20){
  //       window.location = "./vote.php";

  //       }

      
  //   }
  // });
  
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