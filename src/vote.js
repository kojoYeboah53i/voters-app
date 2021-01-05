



$('.add-vote.one').click(function (e) { 
    e.preventDefault();
    // alert("blue team selected");
  
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
         }
       });
  
  
  });
  
  
  
  
  $('.add-vote.two').click(function (e) { 
    e.preventDefault();
    alert("royal team selected");
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
         }
       });
  });
  
  
  
  $('.add-vote.three').click(function (e) { 
    e.preventDefault();
    alert("magenta team selected");
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
         }
       });
  
  });
  
  
  
  $('.add-vote.four').click(function (e) { 
    e.preventDefault();
    alert("gold team selected");
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
         }
       });
  
  });