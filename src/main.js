$(function () {
    // alert('hello world')
});


$('#president').click(function (e) { 
    e.preventDefault();
    alert('eat ma ass')
});


 /*********************
  * user login
 /*********************/

 $('#login').click(function (e) { 
     e.preventDefault(); 
     let phone = $('#phone').val();
     console.log(phone); 
 
 $.ajax({
    type: "POST",
    url: "./src/route?func=login_user",

  data: {phone : phone},
  
  beforeSend: function(){
    console.log("user is loggin ");

  },
  success: function(response) {
    // console.log(response);
}
});
});
