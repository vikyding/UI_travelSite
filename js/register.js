$(document).ready(function(){
  
  $("#").click(function(){

  var email=$("#email").val();
  var username=$("#user").val();
  var password=$("#password").val();
  
  $.ajax({
   type: "POST",
   url: "register.php",
   data: "name="+username+"&pwd="+password+"&email"+email,
   
   success: function(html){  
   if( html=="username" )    {
   alert(html);
   window.location="index.php";
   }
   else{
     $("#add_err").css('display', 'inline', 'important');
    $("#add_err").html("<img src='../img/alert.png' />Something Wrong with the Server, please try later.");
   }
   },
   beforeSend:function()
   {
     $("#add_err").css('display', 'inline', 'important');
     $("#add_err").html("<img src='img/loading.gif' /> Loading...")
   }
  });

});

});