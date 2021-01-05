



$('.add-vote.one').click(function (e) { 
    e.preventDefault();
    $('.btn.btn-block.status.president').removeClass('active');
    $('.btn.btn-block.status.v-president').addClass('active');
    $('.msgalert').fadeIn('1200');
    $('.msgalert h3').html('voted for Blue Team');
  
    var FormData = {
  
      position: "president",
      candidate: $(this).val()
  
    }
        console.log(FormData);
  
       $.ajax({
         
         type: "post",
         url: "./route.php?func=vote",
         data: FormData,
         success: function (response) {
           console.log(response);
           setTimeout(() => {
            $('.msgalert').fadeOut('2000');
          }, 2000);
         }
       });
  
  
  });
  
  
  
  
  $('.add-vote.two').click(function (e) { 
    e.preventDefault();
    $('.btn.btn-block.status.president').removeClass('active');
    $('.btn.btn-block.status.v-president').addClass('active');
   $('.msgalert').fadeIn('1200');
   $('.msgalert h3').html('voted for Royal Team');
    var FormData = {
  
      position: "president",
      candidate: $(this).val()
  
    }
        console.log(FormData);
  
       $.ajax({
         
         type: "post",
         url: "./route.php?func=vote",
         data: FormData,
         success: function (response) {
           console.log(response);

           setTimeout(() => {
             $('.msgalert').fadeOut('2000');
           }, 2000);
         }
       });
  });
  
  
  
  $('.add-vote.three').click(function (e) { 
    e.preventDefault();
    $('.btn.btn-block.status.president').removeClass('active');
    $('.btn.btn-block.status.v-president').addClass('active');
    $('.msgalert').fadeIn('1200');
    $('.msgalert h3').html('voted for Magenta Team');
    var FormData = {
  
      position: "president",
      candidate: $(this).val()
  
    }
        console.log(FormData);
  
       $.ajax({
         
         type: "post",
         url: "./route.php?func=vote",
         data: FormData,
         success: function (response) {
           console.log(response);
           setTimeout(() => {
            $('.msgalert').fadeOut('2000');
          }, 2000);
         }
       });
  
  });
  
  
  
  $('.add-vote.four').click(function (e) { 
    e.preventDefault();
    $('.msgalert').fadeIn('1200');
    $('.msgalert h3').html('voted for Gold Team');

    $('.btn.btn-block.status.president').removeClass('active');
    $('.btn.btn-block.status.v-president').addClass('active');
    var FormData = {
  
      position: "president",
      candidate: $(this).val()
  
    }
        console.log(FormData);
  
       $.ajax({
         
         type: "post",
         url: "./route.php?func=vote",
         data: FormData,
         success: function (response) {
           console.log(response);
           setTimeout(() => {
            $('.msgalert').fadeOut('2000');
          }, 2000);
         }
       });
  
  });