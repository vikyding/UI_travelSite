$(document).ready(function(){

$("#add_err").css('display', 'none', 'important');

$("#login").click(function(){
  var username=$("#name").val();
  var password=$("#pwd").val();
  
  $.ajax({
   type: "POST",
   url: "login.php",
   data: "name="+username+"&pwd="+password,
   success: function(html){  
   if( html=="username" )    {

   window.location="index.php";
   }
    else    {
    $("#add_err").css('display', 'inline', 'important');
    $("#add_err").html("<img src='img/icon4.jpg' height='40' />Wrong username or password");
         }
   },
   beforeSend:function()
   {
     $("#add_err").css('display', 'inline', 'important');
     $("#add_err").html("<img src='img/loading.gif' width='50'/> Loading...")
   }
  });

   return false;
});
});


