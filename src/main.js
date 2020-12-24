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
    $('p.login-box-msg').css('color', 'green');
    $('p.login-box-msg').html(" login successful..!");
      setTimeout(() => {
        window.location = "./verify.php";
        
      }, 3000);
  } else{
    $('p.login-box-msg').css('color', 'red');
    $('p.login-box-msg').html(" phone not found");
  }

}



});



});



$('#register-user').click(function (e) { 
  e.preventDefault(); 
   var formData = {
     phone : $('#phone1').val(),
     name  : $('#name1').val()
   }

   $.ajax({
     type: "POST",
     url: "./route.php?func=register",
     data: formData,
     beforeSend: function () {
       console.log("sending")
      console.log(formData)

     },
      success: function (response) {
        console.log(response); 
        if (  response.indexOf("registration_successful")  > -1 ){
          $('p.box-msg-r').css('color', 'green');
          $('p.box-msg-r').html(" Registration successful..!");
            setTimeout(() => {
              window.location = "./verify.php";
              
            }, 3000);
        } else{
          $('p.box-msg-r').css('color', 'red');
          $('p.box-msg-r').html(" Registration failed..!");
        }
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