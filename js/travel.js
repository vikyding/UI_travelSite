 var airportTags=[
   "Aberdeen",
   "Abilene",
   "Adak Island",
   "ADK",
   "Akiachak",
   "Akiak",
   "Bakersfield",
   "Baltimore",
   "Bangor",
   "Boston",
   "Bar Harbour",
   "Barrow",
   "Carlsbad",
   "Carmel",
   "Casper",
   "Cedar City",
   "Dallas",
   "New York",
   "Beijing",
];



var user;
var dateObject;
var returndateObject;
var ck_depart=/^[A-z][A-z]*$/;
var ck_name=/^[A-z][A-z0-9]*$/;
var ck_pwd=/(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z])/;

$(document).ready(function() {

   $.get("success.php", function(data, status){

            var data1=$.trim(data.toString());
            if(data1!=""){
               $('#noaccount').hide();
               $('#userstatus').show();
               $('.username').html(data1);
               confirm("welcome!"+data1); 
            }
            else{
             $('#noaccount').show();
           }

        }) ;

   $('#logout').click(function(){
   
  
  $.get("logout.php", function(data, status){

            var data1=$.trim(data.toString());
            if(data1!=""){
               $('#noaccount').hide();
               $('#userstatus').show();
               $('.username').html(data1);
            }
            else{
              confirm("Logout Successfully!"); 
             $('#noaccount').show();
             $('#userstatus').hide();
           }

        }) ;


});

	 $("#likebutton").click(function(){
      
        $("#containerX").animate({left:'0px'});
        $("#likebutton  ").animate({left:'200px'});
      
        
        }); 
      
      $("#containerX").click(function(){
      
        $("#containerX").animate({left:'-200px'});
        $("#likebutton").animate({left:'0px'});
        
      });

 $("#index-search").autocomplete({
    source: airportTags
  });	

	$('.selectindex .item').click(function() {
		var index = $(this).data('index');
		$(document).find('.selectindex .item').removeClass('current');
		$(this).addClass('current');
		$(document).find('.pla_indcountrylist').hide();
		$(document).find('.res_list_'+index).show();
	});

    $('#restword .item').click(function() {
		var index = $(this).data('index');
		$(document).find('#restword .item').removeClass('current');
		$(this).addClass('current');
		$(document).find('.piclist').css("left","-980px");
		$(document).find('#worldpiclist'+index).css("left","0px");
	});
  


  


  $("#depart").autocomplete({
    source: airportTags
  });
  $("#arrive").autocomplete({
    source: airportTags
  });


$('.single').click(function(){
  $('.return').hide();
}); 

$('.round').click(function(){
  $('.return').show();
}); 

  $('.tabflight').click(function(){
    $('#search').removeClass('active_guide');
    $('#search').addClass('active_flight');
    $('.search .arrow').css("left","455px");
});

  $('.tabguide').click(function(){
    $('#search').removeClass('active_flight');
    $('#search').addClass('active_guide');
    $('.search .arrow').css("left","145px");
  });


   $("#depart").blur(function(){
        var value=this.value;
        if(!ck_depart.test(value)){
          $(".departair").show();
        }
        else
        {
          $(".formError").hide();
        }
    });

   $("#arrive").blur(function(){
        var value=this.value;
        if(!ck_depart.test(value)){
          $(".arriveair").show();
        }
        else
        {
          $(".formError").hide();
        }
    });

var detime;

$('#departtime').datepicker({
  
    maxDate: "+1Y",
    numberOfMonths:2,
    onSelect: function()
    { 
     dateObject = $(this).datepicker('getDate'); }
     
  }).change(function(){
     
     if($("#departtime").val()!=''){
          
           $(".formError").hide();
        }
        else{
          $('.departtime').show();
        } 

    });

  

 
  

  $('#returntime').datepicker({
    minDate: new Date(), 
    maxDate: "+1Y",
    numberOfMonths:2,
    onSelect: function()
    { 
     returndateObject = $(this).datepicker('getDate'); 
    }
  }).change(function(){
    if($("#returntime").val()!=''){
          
           $(".formError").hide();
        }
        else{
          $('.returntime').show();
        } 
  });

  
   
   $('#viewmore').click(function(){
       $('#user-more').toggleClass('user-default');
   });

   $('#name').blur(function(){
       var value=this.value;
        if(!ck_name.test(value)){
          $(".name-error-message").show();
        }
        else
        {
          $(".formError").hide();
        }
   });

   $('#pwd').blur(function(){
       var value=this.value;
        if(!ck_pwd.test(value)){
          $(".pwd-error-message").show();
        }
        else
        {
          $(".formError").hide();
        }
   });

   $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 24,
      values: [ 0, 24 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( ui.values[ 0 ]+":00" + " - " + ui.values[ 1 ]+":00" );
      }
    });
    $( "#amount" ).val( $( "#slider-range" ).slider( "values", 0 )+":00" +
      " - " + $( "#slider-range" ).slider( "values", 1 )+":00" );

    $( "#accordion" ).accordion();

});