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
   
   $('p.login-box-msg').html(response);
  if(response == 'successful'){
  window.location = "./verify.php";
  }

}



});



});



$('register').click(function (e) { 
  e.preventDefault();
   var formData = {
     phone : $('#phone').val(),
     name  : $('#name').val()
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
        $('p.box-msg-r').html(response);
        if(response == 'successful'){
        window.location = "./verify.php";
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
      if(response == 'successful'){
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