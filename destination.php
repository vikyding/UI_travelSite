<!DOCTYPE html>
<html>
<head>
   
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Travel</title>
<meta name="Description" content="Web Design Final Project" />
<meta name="keywords" content="travel,trip,guide">
<meta name="author" content="Mengchen Ding Zicheng gong Zhi Li">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">


<!--Import Bootstrap-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--Import Jquery-ui-->

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.2/angular.min.js"></script>
<link href="jquery-ui/jquery-ui.css" rel="stylesheet">
<script src="jquery-ui/external/jquery/jquery.js"></script>
<script src="jquery-ui/jquery-ui.js"></script>
<!--Custom js-->
<script src="js/home.js"></script>
<script src="js/travel.js"></script>
<script src="js/login.js"></script>
<script>
var app = angular.module('myApp', ['PasswordValidation']);

angular.module('PasswordValidation',[]).directive('pwCheck',
  function() {
     return {
      require: 'ngModel',
      link: function (scope, elem, attrs, ctrl) {
         ctrl.$parsers.unshift(function (viewValue, $scope) {
                var noMatch = viewValue != scope.myForm.password.$viewValue
                ctrl.$setValidity('noMatch', !noMatch)
            })
        }
      }
    });
  
app.controller('formController',function($scope){
  $scope.user="";
  $scope.password="";
});


</script>
<!--Custom -->
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/travel.css">
<link rel="stylesheet" href="css/worlddes.css">
 
</head>

<body onload="pics_onload()">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="index.php">
        <!--<img  class="icon" alt="Brand" src="img/icon_travel.png">-->
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li><a href="destination.php">Destinations <span class="sr-only">(current)</span></a></li>
        <li><a href="menu.html">Travel<span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
        <a class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">HOT
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Asia</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">America</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Europe</a></li>
        <li role="presentation" class="divider"></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Find More</a></li>
    </ul>
    </li>      
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="search" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default btn-change">
          <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span></button>
      </form>
      <div class="navbar-right">
        <div  id="userstatus" class="navbar-acc status" style="display:none">
          <div class="userstatus hover">
          <span class="avatar">
             <a href="#">
                 <img src="img/user.jpg" width="32" height="32">
             </a>
          </span>
          <span class="username">
          </span>
          <span class="viewmore" style="padding-right:12px">
             <a href="#" id="viewmore">
                <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
             </a>
         </span>
            <div id="user-more" class="q-layer user-fun user-default">
            <ul>
              <li>View Account</li>
              <li>My Comments</li>
              <li>Like List</li>
              <li>My Orders</li>
              <li id="logout">Log Out</li>
            </ul>
          </div>
        </div>
          <div class="usermsg">
            <a class="msg" href="">
              <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
              <em class="num">206</em>
            </a>
          </div>
        </div>
        <ul id="noaccount" class="navbar-acc">
          <li><button type="button" class="btn btn-default" data-toggle="modal" data-target="#registerModal">Register</button></li>
          <li><button type="button" class="btn btn-default" data-toggle="modal" data-target="#loginModal">Login</button></li>
        </ul>
        </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="carousel-inner">
<img src="img/guide.jpg"  alt="guide">
</div>

 <div class="world-container">
 
    <div class="restaurant-world">
      <div class="rest-index">
        <h2 class="title fontY">Explore World</h2>
          <ul class="tabs" id="restword">
                        <li   type="index" data-index="0" class="pics item current"><a>Spring</a></li>
                        <li   type="index" data-index="1" class="pics item"><a>Sunny</a></li>
                        <li   type="index" data-index="2" class="pics item"><a>travel</a></li>

         </ul>
    </div>
    <div class="restaurant-pic">
        <ul class="piclist" id="worldpiclist0">
            <li class="item1">
            <a href="../../../location/Beijing/Beijing.html" data-bn-ipg="place-hp-1-145-1">
            <img width="389" height="200" alt="" src="img/worldimgs/s1.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Beijing</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
            <li class="item2">
            <a href="../../../location/NewYork/NewYork.html" data-bn-ipg="place-hp-1-145-2">
            <img width="192" height="200" alt="" src="img/worldimgs/s2.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">New York</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
            <li class="item3">
            <a href="../../../location/PuertoRico/puertorico.html" data-bn-ipg="place-hp-1-145-4">
            <img width="192" height="405" alt="" src="img/worldimgs/s3.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Puerto Rico</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
            <li class="item4">
            <a href="../../../location/hongkong/hongkong.html" data-bn-ipg="place-hp-1-145-5">
            <img width="192" height="200" alt="" src="img/worldimgs/s4.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Hang Kong</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
     
            <li class="item5">
            <a href="../../../location/Taiwan/Taiwan.html" data-bn-ipg="place-hp-1-145-9">
            <img width="192" height="405" alt="" src="img/worldimgs/s5.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">台北</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
            <li class="item6">
            <a href="../../../location/London/london.html" data-bn-ipg="place-hp-1-145-10">
            <img width="389" height="200" alt="" src="img/worldimgs/s6.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">London</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>

            <li class="item7">
            <a href="../../../location/phili/philiintro.html" data-bn-ipg="place-hp-1-145-7">
            <img width="192" height="200" alt="" src="img/worldimgs/s7.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Philadelphia</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>

            <li class="item8">
            <a href="../../../location/phili/philiintro.html" data-bn-ipg="place-hp-1-145-7">
            <img width="192" height="200" alt="" src="img/worldimgs/s8.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Philadelphia</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>

            <li class="item9">
            <a href="../../../location/phili/philiintro.html" data-bn-ipg="place-hp-1-145-7">
            <img width="192" height="200" alt="" src="img/worldimgs/s9.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Philadelphia</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>

            <li class="item10">
            <a href="../../../location/phili/philiintro.html" data-bn-ipg="place-hp-1-145-7">
            <img width="389" height="200" alt="" src="img/worldimgs/s10.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Philadelphia</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>


        </ul>
            

        <ul class="piclist" id="worldpiclist1" style="left:-980px;">
            <li class="item1">
            <a href="#">
            <img width="389" height="200" alt="" src="img/worldimgs/1.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Beijing</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
            <li class="item2">
            <a href="#">
            <img width="192" height="200" alt="" src="img/worldimgs/2.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">New York</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
            <li class="item3">
            <a href="../../../location/PuertoRico/puertorico.html" data-bn-ipg="place-hp-1-145-4">
            <img width="192" height="405" alt="" src="img/worldimgs/3.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Puerto Rico</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
            <li class="item4">
            <a href="../../../location/hongkong/hongkong.html" data-bn-ipg="place-hp-1-145-5">
            <img width="192" height="200" alt="" src="img/worldimgs/4.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Hang Kong</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
     
            <li class="item5">
            <a href="../../../location/Taiwan/Taiwan.html" data-bn-ipg="place-hp-1-145-9">
            <img width="192" height="405" alt="" src="img/worldimgs/5.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">台北</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
            <li class="item6">
            <a href="../../../location/London/london.html" data-bn-ipg="place-hp-1-145-10">
            <img width="389" height="200" alt="" src="img/worldimgs/6.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">London</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>

            <li class="item7">
            <a href="../../../location/phili/philiintro.html" data-bn-ipg="place-hp-1-145-7">
            <img width="192" height="200" alt="" src="img/worldimgs/7.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Philadelphia</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>

            <li class="item8">
            <a href="../../../location/phili/philiintro.html" data-bn-ipg="place-hp-1-145-7">
            <img width="192" height="200" alt="" src="img/worldimgs/8.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Philadelphia</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>

            <li class="item9">
            <a href="../../../location/phili/philiintro.html" data-bn-ipg="place-hp-1-145-7">
            <img width="192" height="200" alt="" src="img/worldimgs/9.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Philadelphia</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>

            <li class="item10">
            <a href="../../../location/phili/philiintro.html" data-bn-ipg="place-hp-1-145-7">
            <img width="389" height="200" alt="" src="img/worldimgs/10.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Philadelphia</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>


        </ul>

        <ul class="piclist" id="worldpiclist2" style="left:-980px;">
            <li class="item1">
            <a href="../../../location/Beijing/Beijing.html" data-bn-ipg="place-hp-1-145-1">
            <img width="389" height="200" alt="" src="img/worldimgs/t1.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Beijing</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
            <li class="item2">
            <a href="../../../location/NewYork/NewYork.html" data-bn-ipg="place-hp-1-145-2">
            <img width="192" height="200" alt="" src="img/worldimgs/t2.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">New York</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
            <li class="item3">
            <a href="../../../location/PuertoRico/puertorico.html" data-bn-ipg="place-hp-1-145-4">
            <img width="192" height="405" alt="" src="img/worldimgs/t3.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Puerto Rico</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
            <li class="item4">
            <a href="../../../location/hongkong/hongkong.html" data-bn-ipg="place-hp-1-145-5">
            <img width="192" height="200" alt="" src="img/worldimgs/t4.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Hang Kong</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
     
            <li class="item5">
            <a href="../../../location/Taiwan/Taiwan.html" data-bn-ipg="place-hp-1-145-9">
            <img width="192" height="405" alt="" src="img/worldimgs/t5.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">台北</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>
     
            <li class="item6">
            <a href="../../../location/London/london.html" data-bn-ipg="place-hp-1-145-10">
            <img width="389" height="200" alt="" src="img/worldimgs/t6.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">London</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>

            <li class="item7">
            <a href="../../../location/phili/philiintro.html" data-bn-ipg="place-hp-1-145-7">
            <img width="192" height="200" alt="" src="img/worldimgs/t7.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Philadelphia</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>

            <li class="item8">
            <a href="../../../location/phili/philiintro.html" data-bn-ipg="place-hp-1-145-7">
            <img width="192" height="200" alt="" src="img/worldimgs/t8.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Philadelphia</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>

            <li class="item9">
            <a href="../../../location/phili/philiintro.html" data-bn-ipg="place-hp-1-145-7">
            <img width="192" height="200" alt="" src="img/worldimgs/t9.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Philadelphia</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>

            <li class="item10">
            <a href="../../../location/phili/philiintro.html" data-bn-ipg="place-hp-1-145-7">
            <img width="389" height="200" alt="" src="img/worldimgs/t10.jpg">
            <h3 class="title"><span></span></h3>
            <div class="mask">
            <i></i>
            <p class="picDesp"><em class="fontYaHei">Philadelphia</em><span class="texts fontYaHei">Maybe you want to spend less time organising</span></p>
            </div>
            </a>
            </li>


        </ul>
        
    </div>
    </div>

    <div class="pla_indallworld">
    <div class="rest-index selectindex">
        <h2 class="title fontYaHei">Location List</h2>

        <ul class="tabs" id="locationtab">
           <li type="index" data-index="0" class="item current"><a>New York</a></li>
           <li type="index" data-index="1" class="item"><a>Philadelphia</a></li>
           <li type="index" data-index="2" class="item"><a>Hang Kong</a></li>
           <li type="index" data-index="3" class="item"><a>London</a></li>
           <li type="index" data-index="4" class="item"><a>Beijing</a></li>
           <li type="index" data-index="5" class="item"><a>Puerto Rico</a></li>
           <!--<li id="other"><a>探索更多</a></li>-->
        </ul>
        <div id="panel"   style="display:none;">
           <ul class="moreres">
       
       
         </ul>
        </div>
    </div> 

 <div class="pla_indcountrylists">
          
    <div class="pla_indcountrylist clearfix res_list_0" id="list_0">
            <h2 class="title clearfix"><em><a href="http://place.qyer.com/asia/" class="fontYaHei" data-bn-ipg="place-index-countrylist">New York New York</a></em>
            <span></span>
            </h2>                                                              

            <div class="line1">
                <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Ai Fiori <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">巴适成都 <span class="en"> New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Brasserie <span class="en"> New York</span></a></li>    
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Cafe Boulud <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Dominique Ansel Kitchen <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">En Japanese Brasserie <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Gotham Bar & Grill <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Hatsuhana <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">姜虎东烤肉 <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">JoJo<span class="en">New York</span></a></li>
                </ul>
            </div>
            <div class="line2">
                <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Le Cirque <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Le Bernardin <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Nougatine at Jean Georges<span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Smith & Wollensky <span class="en">New York</span></a></li>  
                     <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">21Club <span class="en">New York</span></a></li>
                </ul>
            </div>
            <div class="line3">
                 <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Ai Fiori <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">巴适成都 <span class="en"> New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Brasserie <span class="en"> New York</span></a></li>    
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Cafe Boulud <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Dominique Ansel Kitchen <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">En Japanese Brasserie <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Gotham Bar & Grill <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Hatsuhana <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">姜虎东烤肉 <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">JoJo<span class="en">New York</span></a></li>
                </ul>
            </div>
                        
    </div>


     <div class="pla_indcountrylist res_list_1 clearfix" id="list_1" style="display:none;">
            <h2 class="title clearfix"><em><a href="http://place.qyer.com/asia/" class="fontYaHei" data-bn-ipg="place-index-countrylist">Philadelphia</a></em>
            <span></span>
            </h2>
                                                                            
                
        
             <div class="line1">
                <ul class="list">
                   <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Cheese Steak <span class="en">Philadelphia</span></a></li>
                   <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">El Vez <span class="en">Philadelphia</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Fogo De Chao Brazilian Steakhouse <span class="en">Philadelphia</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Nan Zhou Hand Drawn Noodle House <span class="en">Philadelphia</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Reading Terminal Market <span class="en">Philadelphia</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">The City Tavern Restaurant <span class="en">Philadelphia</span></a></li>

                </ul>
            </div>
            <div class="line2">
                 <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Icremeria <span class="en">Hang Kong</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Little Bao <span class="en">Hang Kong</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Munchies <span class="en">Hang Kong</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Oddies Foodies <span class="en">Hang Kong</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Sweet House ChaCha <span class="en">Hang Kong</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Via Tokyo <span class="en">Hang Kong</span></a></li>

 
                </ul>
            </div>
            <div class="line3">
                 <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Le Cirque <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Le Bernardin <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Nougatine at Jean Georges<span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Smith & Wollensky <span class="en">New York</span></a></li>  
                     <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">21Club <span class="en">New York</span></a></li>
                </ul>
            </div>
    </div>


    <div class="pla_indcountrylist clearfix res_list_2" id="list_2" style="display:none;">
            <h2 class="title clearfix"><em><a href="http://place.qyer.com/asia/" class="fontYaHei" data-bn-ipg="place-index-countrylist">Hang Kong Hong Kong</a></em>
            <span></span>
            </h2>
                                                                            
                
        
            <div class="line1">
                <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Icremeria <span class="en">Hang Kong</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Little Bao <span class="en">Hang Kong</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Munchies <span class="en">Hang Kong</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Oddies Foodies <span class="en">Hang Kong</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Sweet House ChaCha <span class="en">Hang Kong</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Via Tokyo <span class="en">Hang Kong</span></a></li>

 
                </ul>
            </div>
            <div class="line2">
                 <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Ai Fiori <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">巴适成都 <span class="en"> New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Brasserie <span class="en"> New York</span></a></li>    
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Cafe Boulud <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Dominique Ansel Kitchen <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">En Japanese Brasserie <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Gotham Bar & Grill <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Hatsuhana <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">姜虎东烤肉 <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">JoJo<span class="en">New York</span></a></li>
                </ul>
            </div>
            <div class="line3">
               <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Cafebar Necco <span class="en">London</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Duck & Waffle <span class="en">London</span></a></li>
                     <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Friends of Ours <span class="en">London</span></a></li>  
                     <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">OPSO <span class="en">London</span></a></li>
                     <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Pan de vie <span class="en">London</span></a></li>
                     <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Shibuya <span class="en">London</span></a></li>
                      <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Sunday Cafe <span class="en">London</span></a></li> 
                       <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Tombo <span class="en">London</span></a></li>
                       <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">The Barge House <span class="en">London</span></a></li>

                </ul>
            </div>
                        
    </div>

    <div class="pla_indcountrylist clearfix res_list_3" id="list_3" style="display:none;">
            <h2 class="title clearfix"><em><a href="http://place.qyer.com/asia/" class="fontYaHei" data-bn-ipg="place-index-countrylist">London Lundon</a></em>
            <span></span>
            </h2>
                                                                            
                
        
            <div class="line1">
                <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Cafebar Necco <span class="en">London</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Duck & Waffle <span class="en">London</span></a></li>
                     <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Friends of Ours <span class="en">London</span></a></li>  
                     <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">OPSO <span class="en">London</span></a></li>
                     <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Pan de vie <span class="en">London</span></a></li>
                     <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Shibuya <span class="en">London</span></a></li>
                      <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Sunday Cafe <span class="en">London</span></a></li> 
                       <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Tombo <span class="en">London</span></a></li>
                       <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">The Barge House <span class="en">London</span></a></li>

                </ul>
            </div>
            <div class="line2">
                 <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Dear Deer <span class="en">Beijing</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Gelato Pique Cafe <span class="en">Beijing</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Quuen's Cafe <span class="en">Beijing</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Strawberry Cafe <span class="en">Beijing</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Tiens Tiens<span class="en">Beijing</span></a></li>
                 
                 <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Voyage Coffee <span class="en">Beijing</span></a></li>
                 <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">幸菓 <span class="en">Beijing</span></a></li>
                </ul>
            </div>
            <div class="line3">
                <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Ai Fiori <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">巴适成都 <span class="en"> New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Brasserie <span class="en"> New York</span></a></li>    
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Cafe Boulud <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Dominique Ansel Kitchen <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">En Japanese Brasserie <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Gotham Bar & Grill <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Hatsuhana <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">姜虎东烤肉 <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">JoJo<span class="en">New York</span></a></li>
                </ul>
            </div>
                        
    </div>

   <div class="pla_indcountrylist clearfix res_list_4" id="list_4" style="display:none;">
            <h2 class="title clearfix"><em><a href="http://place.qyer.com/asia/" class="fontYaHei" data-bn-ipg="place-index-countrylist">Beijing Beijing</a></em>
            <span></span>
            </h2>
                                                                            
                
        

             <div class="line1">
                <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Dear Deer <span class="en">Beijing</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Gelato Pique Cafe <span class="en">Beijing</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Quuen's Cafe <span class="en">Beijing</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Strawberry Cafe <span class="en">Beijing</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Tiens Tiens<span class="en">Beijing</span></a></li>
                 
                 <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Voyage Coffee <span class="en">Beijing</span></a></li>
                 <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">幸菓 <span class="en">Beijing</span></a></li>
                </ul>
            </div>
            <div class="line2">
                 <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Ai Fiori <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">巴适成都 <span class="en"> New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Brasserie <span class="en"> New York</span></a></li>    
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Cafe Boulud <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Dominique Ansel Kitchen <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">En Japanese Brasserie <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Gotham Bar & Grill <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Hatsuhana <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">姜虎东烤肉 <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">JoJo<span class="en">New York</span></a></li>
                </ul>
            </div>
            <div class="line3">
               <ul class="list">
                     <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Casa Lola <span class="en">Puerto Rico</span></a></li>
                      <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Cafe Mallorca <span class="en">Puerto Rico</span></a></li>
                      <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Choil <span class="en">Puerto Rico</span></a></li>
                      <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Desayunos <span class="en">Puerto Rico</span></a></li>
                      <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Dinghy Dock <span class="en">Puerto Rico</span></a></li>
                       <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">El Jibarito <span class="en">Puerto Rico</span></a></li>
                <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">El Quenepo <span class="en">Puerto Rico</span></a></li>
                <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Jiribilla BBQ <span class="en">Puerto Rico</span></a></li>
                <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Marmalade <span class="en">Puerto Rico</span></a></li> 
                 <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Orozco's <span class="en">Puerto Rico</span></a></li>
                 <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Starfish <span class="en">Puerto Rico</span></a></li> 

                </ul>
            </div>
                        
    </div>

 
    <div class="pla_indcountrylist clearfix res_list_5" id="list_5" style="display:none;">
            <h2 class="title clearfix"><em><a href="http://place.qyer.com/asia/" class="fontYaHei" data-bn-ipg="place-index-countrylist">Puerto Rico </a></em>
            <span></span>
            </h2>
                                                                            
                
        

           <div class="line1">
                <ul class="list">
                     <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Casa Lola <span class="en">Puerto Rico</span></a></li>
                      <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Cafe Mallorca <span class="en">Puerto Rico</span></a></li>
                      <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Choil <span class="en">Puerto Rico</span></a></li>
                      <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Desayunos <span class="en">Puerto Rico</span></a></li>
                      <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Dinghy Dock <span class="en">Puerto Rico</span></a></li>
                       <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">El Jibarito <span class="en">Puerto Rico</span></a></li>
                <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">El Quenepo <span class="en">Puerto Rico</span></a></li>
                <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Jiribilla BBQ <span class="en">Puerto Rico</span></a></li>
                <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Marmalade <span class="en">Puerto Rico</span></a></li> 
                 <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Orozco's <span class="en">Puerto Rico</span></a></li>
                 <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Starfish <span class="en">Puerto Rico</span></a></li> 

                </ul>
            </div>
            <div class="line2">
                 <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Ai Fiori <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">巴适成都 <span class="en"> New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Brasserie <span class="en"> New York</span></a></li>    
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Cafe Boulud <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Dominique Ansel Kitchen <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">En Japanese Brasserie <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Gotham Bar & Grill <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Hatsuhana <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">姜虎东烤肉 <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">JoJo<span class="en">New York</span></a></li>
                </ul>
            </div>
            <div class="line3">
                <ul class="list">
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Ai Fiori <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">巴适成都 <span class="en"> New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Brasserie <span class="en"> New York</span></a></li>    
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Cafe Boulud <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">Dominique Ansel Kitchen <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/united-arab-emirates/" data-bn-ipg="place-index-countrylist-402">En Japanese Brasserie <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Gotham Bar & Grill <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">Hatsuhana <span class="en">New York</span></a></li>
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">姜虎东烤肉 <span class="en">New York</span></a></li> 
                    <li class="item"><a href="http://place.qyer.com/afghanistan/" data-bn-ipg="place-index-countrylist-401">JoJo<span class="en">New York</span></a></li>
                </ul>
            </div>
    </div>

    

 </div>
    </div>

</div>
       
<!-- FOOTER -->
    <footer>
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>Northeastern University</p>
                        <p>Web Design</p>
                        <p>Mengchen Ding Zicheng Gong Zhi Li</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Share the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Contact Us</h3>
                        <p>Mengchen: <a href="mailto:ding.men@husky.neu.edu" style="color:white;">ding.men@husky.neu.edu</a></p>
                        <p>Zicheng: <a href="mailto:gong.zi@husky.neu.edu" style="color:white;">gong.zi@husky.neu.edu</a></p>
                        <p>Zhi Li: <a href="mailto:li.zhi3@husky.neu.edu" style="color:white;">li.zhi3@husky.neu.edu</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright © Northearstern University 2016
                    </div>
                </div>
            </div>
        </div>
</footer>

<!--Log In Modal-->
<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">User Login</h4>
        </div>
        <div class="modal-body">
          <div class="loginform-in">
               <div class="ssnlog">
                  <img>
                  <img>
               </div>
               <h4>OR</h4>
               <div class="err" id="add_err"></div>
                  <fieldset>
                    <form ng-app="myApp" name="myForm" ng-controller="formController" action="./" method="post">
                        <ul>
                           <li> <label for="name">Username </label>
                           <input type="text" name="name" ng-model="name" id="name" 
                                  ng-minlength="5" required
                                  ng-pattern="/^[A-z][A-z0-9]*$/"
                                  placeholder="5 characters min">
                            <span style="color:red" ng-show="myForm.name.$dirty && myForm.name.$invalid">
                            <span ng-show="myForm.name.$error.required">Username is required.</span>
                            <span ng-show="myForm.name.$error.minlength">Username should have at least 5 characters.</span>
                            <span ng-show="myForm.name.$error.pattern">Must start with a letter, and contain letters &amp; numbers only</span>
                            </span>
                           </li>
                           <li> <label for="name">Password</label>
                           <input type="password" name="password" ng-model="password" required
                          ng-minlength="6" ng-maxlength="20" placeholder="Password" id="password"
                          ng-pattern="/(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z])/">
                           <span style="color:red" ng-show="myForm.password.$dirty && myForm.password.$invalid">
                           <span ng-show="myForm.password.$error.required">Password is required.</span>
                           <span ng-show="myForm.password.$error.minlength || myForm.password.$error.maxlength">Passwords must be between 6 and 20 characters.</span>
                           <span ng-show="myForm.password.$error.pattern">Must contain one lower &amp; uppercase letter, and one non-alpha character (a number or a symbol.)</span>
                           </span>
                           </li>
                           <li> <label></label>
                           <input type="submit" id="login" name="login" value="Login" class="loginbutton" ></li>
                        </ul>
                    </form>
                  </fieldset>
          </div>
          <div class="login-row">
           <a class="col-xs-6" href="" data-toggle="modal" data-target="#registerModal">New Account?</a>
          </div>
        </div>
      </div>
      
    </div>
</div>
  


<!--register-->
<div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Sign Up</h4>
        </div>

        <div class="modal-body">
            <div class="loginform-in register">
                  <fieldset>
                    <form ng-app="myApp" name="myForm" ng-controller="formController" action="./" method="post">
                        <ul>
                           <li> <label for="name">Email:</label>
                           <input type="email" name="email" ng-model="email" required
                      placeholder="xx@example.com">
                           <span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
                           <span ng-show="myForm.email.$error.required">Email is required.</span>
                           <span ng-show="myForm.email.$error.email">Invalid email address.</span>
                           </span>
                           </li>

                           <li> <label for="name">Username:</label>
                           <input type="text" name="user" ng-model="user" 
                                  ng-minlength="5" required
                                  ng-pattern="/^[A-z][A-z0-9]*$/"
                                  placeholder="5 characters min">
                            <span style="color:red" ng-show="myForm.user.$dirty && myForm.user.$invalid">
                            <span ng-show="myForm.user.$error.required">Username is required.</span>
                            <span ng-show="myForm.user.$error.minlength">Username should have at least 5 characters.</span>
                            <span ng-show="myForm.user.$error.pattern">Must start with a letter, and contain letters &amp; numbers only</span>
                            </span>
                           </li>

                           <li> <label for="name">Password</label>
                           <input type="password" name="password" ng-model="password" required
                          ng-minlength="6" ng-maxlength="20" placeholder="Password"
                          ng-pattern="/(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z])/">
                           <span style="color:red" ng-show="myForm.password.$dirty && myForm.password.$invalid">
                           <span ng-show="myForm.password.$error.required">Password is required.</span>
                           <span ng-show="myForm.password.$error.minlength || myForm.password.$error.maxlength">Passwords must be between 6 and 20 characters.</span>
                           <span ng-show="myForm.password.$error.pattern">Must contain one lower &amp; uppercase letter, and one non-alpha character (a number or a symbol.)</span>
                           </span>
                           </li>
                           
                           <li> <label for="name">Confirm Password:</label>
                           <input type="password" name="confirmpass" ng-model="confirmpass" required
                            ng-minlength="6" ng-maxlength="12" placeholder="Confirm Password"
                            pw-check="password">
                           <span style="color:red" ng-show="myForm.confirmpass.$dirty && myForm.confirmpass.$invalid 
                              && myForm.confirmpass.$error.noMatch">
                           <span ng-show="myForm.confirmpass.$error.required">Password is required.</span>
                           <span ng-show="myForm.confirmpass.$error.noMatch">Password dont't match the previous one</span>
                           </span>
                           </li>

                           <li> <label></label>
                           <input type="submit" value="Sign Up"  class="loginbutton"
                           ng-disabled="myForm.user.$dirty && myForm.user.$invalid ||  
                           myForm.email.$dirty && myForm.email.$invalid ||
                           myForm.password.$dirty && myForm.password.$invalid ||
                           myForm.confirmpass.$dirty && myForm.confirmpass.$invalid ||
                           myForm.contact.$dirty && myForm.contact.$invalid ||
                           myForm.street.$dirty && myForm.street.$invalid ||
                           myForm.city.$dirty && myForm.city.$invalid ||
                           myForm.zipcode.$dirty && myForm.zipcode.$invalid
                           ">
                           </li>
                        </ul>
                    </form>
                  </fieldset>
          </div>
         
        </div>

          <div class="login-row">
           <a href="" data-toggle="modal" data-dismiss="modal">Back</a>
         </div>
    </div>
      
  </div>

</div>
<!--modal end-->
</body>
</html>
 