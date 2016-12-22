
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
<!--custom js-->
<script src="js/home.js"></script>
<script src="js/travel.js"></script>
<script src="js/login.js"></script>
<script src="js/register.js"></script>
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
  
app.controller('formController',function($scope,$http){
  $scope.user="";
  $scope.password="";

  $scope.processForm = function() {

  $http({
    method : "POST",
    url : "register.php",
    data: {'username':$scope.user,
           'email':$scope.email,
           'pwd':$scope.password}
  }).then(function mySucces(response) {
      alert("right"+response);
    }, function myError(response) {
      alert(response);
  });
    }

});





</script>

<!--Custom js-->
<script>



</script>

<!--Custom css-->
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/travel.css">
</head>
<body onload="advert_onload()">

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
      <a class="navbar-brand" href="#">
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
          <input type="search" class="form-control change" placeholder="Search">
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
<!--slides-->
<div id="whole">
        <div id="containerX" style="left: -200px;">
          <div>
            <h5><strong>Suggestion or Help</strong></h5>
            <p><strong>If you have any suggestion or question,<br>please contact us.</strong></p>
            <form name="feedback">
              <textarea name="msg" form="feedback" rows="12" cols="25"></textarea>
              <input type="submit" value="Send">
            </form>
          </div>
        </div>

        <div id="sliderout"></div>
        <div id="likebutton" style="left: 0px;"></div>  
</div>

<div class="banner">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    <div class="item active" style="background-image:url(img/slides1.jpg)">
      <div class="text-panel" style="transform:translateY(0px);">
        <span class="num">
          <i>1</i>
          /
          <em>4</em>
        </span>
        <div class="text">
          <a href="#">
            <p><strong>Tailand</strong></p>
          </a>
        </div>
      </div>
    </div>

    <div class="item" style="background-image:url(img/slides2.jpg)">
     <div class="text-panel" style="transform:translateY(0px);">
        <span class="num">
          <i>2</i>
          /
          <em>4</em>
        </span>
        <div class="text">
          <a href="#">
            <p><strong>Tunisia</strong></p>
          </a>
        </div>
      </div>
    </div>

    <div class="item" style="background-image:url(img/slides3.jpg)">
     <div class="text-panel" style="transform:translateY(0px);">
        <span class="num">
          <i>3</i>
          /
          <em>4</em>
        </span>
        <div class="text">
          <a href="#">
            <p><strong>Slovenia</strong></p>
          </a>
        </div>
      </div>
    </div>

    <div class="item" style="background-image:url(img/slides4.jpg)">
     <div class="text-panel" style="transform:translateY(0px);">
        <span class="num">
          <i>4</i>
          /
          <em>4</em>
        </span>
        <div class="text">
          <a href="#">
            <p><strong>India</strong></p>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<div id="search"  class="search active_guide">
  <div class="search_tab">
    <ul>
       <li class="tabguide">Search</li>
       <li class="tabflight">Flights</li>
    </ul>
  </div>
  <div class="search_panel">
    <em class="arrow"></em>
    <div class="panel_inner">
     <div class="wholepanel">
      <div class="guide_panel">
        <div class="input-guide">
          <form name="guideform" action="flight.php" method="post">
          <div class="guide-row">
          <input id="index-search" class="txt" type="text" name="">
          <button class="btn" type="submit">Search</button>
        </div>
          </form>
        </div>
      </div>
      <div class="flight_panel">
        <div class="input-flight">
          <form name="flightform" method="post" action="flight.php">
          <fieldset class="flight-type text-center">
            <label class="radio">
            <input type="radio" name="type" value="rt" class="cu-radio round" checked>
            <span>Round Trip</span></label>
            <label class="radio" style="margin-left:20px;">
            <input type="radio" name="type" value="st" class="cu-radio single">
            <span class="s">Single Trip</span></label>
          </fieldset>
          
          <div class="flight-row">
          <fieldset class="flightcell">
            <label for="myName" class="text-label">From</label>
            <input type="text" name="depart" id="depart" class="in-type" placeholder="&nbsp Airport or City" ng-pattern="/^[A-z][A-z]*$/">
            <div class="departair formError input-error-message"><span>Please enter your City or Airport</span>
            </div>
          </fieldset>
         

          <fieldset class="flightcell to">
          <label for="myName" class="text-label to">To</label>
          <input type="text" name="arrive" id="arrive" class="in-type" placeholder="&nbsp Airport or City" required>
          <div class="arriveair formError input-error-message"><span>Please enter your City or Airport</span>
          </div>
          </fieldset>
          </div>

          <div class="flight-row">
          <fieldset class="flightcell">
            <label for="myDate" class="text-label de">Depart</label>
            <input type="text" name="departtime" id="departtime" class="in-type" placeholder="&nbsp Depart Time">
            <div class="formError input-error-message departtime"><span>Please enter depart time</span>
            </div>
          </fieldset>

          <fieldset class="flightcell to return">
          <label for="myDate" class="text-label to">Return</label>
          <input type="text" name="returntime" id="returntime" class="in-type" placeholder="&nbsp Return Time">
          <div class="returntime formError input-error-message"><span>Please enter return time</span>
          </div>
          </fieldset>
          </div>

          <div class="flight-row">
            <div class="passangercell adults">
                     <label class="tra-ty">Adults:</label>
                     <div class="bfh-selectbox">
                          <label for="adults" class="select-arrow"></label>
                          <select name="adults" id="adults">
                              <option value="0">0</option>
                              <option value="1" selected>1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                          </select>
                     </div>
               </div>
           
            <div class="passangercell seniors">
                     <label class="tra-ty">Seniors:</label>
                     <div class="bfh-selectbox">
                          <select name="seniors" id="seniors">
                              <option value="0">0</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                          </select>
                     </div>
               </div>
          
            <div class="passangercell children">
                     <label class="tra-ty">Children:</label>
                     <div class="bfh-selectbox">
                          <label for="adults" class="select-arrow"></label>
                          <select name="children" id="adults">
                              <option value="0">0</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                          </select>
                     </div>
               </div>
            </div>
         
          <div class="flight-row">
            <div class="passangercell">
                     <label class="tra-ty">Cabin Class:</label>
                     <div class="bfh-selectbox">
                          <label for="cabinclass" class="select-arrow"></label>
                          <select name="cabinclass" id="cabinclass">
                              <option value="0">Coach</option>
                              <option value="1" selected>Premium Economy</option>
                              <option value="2">Business</option>
                              <option value="3">First</option>
                          </select>
                     </div>
               </div>
           
               <input id="searchFlight" type="submit" class="btn-flight" value="Search Now">
          </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>


<!--container-->

<!--Main content-->
<div class="container">

  <!--advertisement-->
  <div class="row adv">
   <div class="advert">
      <div class="advert-cell">
      <img src="img/adverts/position1_1.jpg" name="imgAdvert1"/>
      </div>
      <div class="advert-cell">
      <img src="img/adverts/position2_1.jpg" name="imgAdvert2"/>
      </div>
      <div class="advert-cell">
      <img src="img/adverts/position3_1.jpg" name="imgAdvert3"/>
      </div>
      <img>
    </div>
  </div>

  <!--spots-->
<div class="row">
  <div class="col-lg-12 text-center">
    <h2> Hot Spots</h2>
    <hr class="star-primary">
</div>
</div>

<section id="portfolio">
  <div class="container">
    <div class="row">
       
       <div class="col-sm-4 portfolio-item">
          <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
             <div class="caption">
               <div class="caption-content">
                  <i class="fa fa-search-plus fa-3x"></i>
               </div>
             </div>
             <img src="img/spot1.jpg" class="img-responsive">
          </a>
          <div class="text-spot">
          <h4>Kuala Lumpur</h4>
          <p>Nothing says vacation like crystalline blue waters, white-sand beaches and luxurious indulgence. That's why we're counting down the 21 best destinations in the Caribbean, where vacation is a lifestyle.</p>
          </div>
       </div>
  
   <div class="col-sm-4 portfolio-item">
  <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
  <div class="caption">
    <div class="caption-content">
      <i class="fa fa-search-plus fa-3x"></i>
    </div>

    </div>
    <img src="img/spot2.jpg" class="img-responsive">
    </a>
    <div class="text-spot">
      <h4>Dubai</h4>
      <p>Nothing says vacation like crystalline blue waters, white-sand beaches and luxurious indulgence. That's why we're counting down the 21 best destinations in the Caribbean, where vacation is a lifestyle.</p>
   </div>
  </div>

   <div class="col-sm-4 portfolio-item">
  <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
  <div class="caption">
    <div class="caption-content">
      <i class="fa fa-search-plus fa-3x"></i>
    </div>

    </div>
    <img src="img/spot3.jpg" class="img-responsive">
    </a>
    <div class="text-spot">
      <h4>England</h4>
      <p>Nothing says vacation like crystalline blue waters, white-sand beaches and luxurious indulgence. That's why we're counting down the 21 best destinations in the Caribbean, where vacation is a lifestyle.</p>
   </div>
  </div>

</div>
</section>



<!--interestes-->
<div class="row">
  <div class="col-lg-12 text-center">
    <h2>Reviews</h2>
  <hr class="star-primary">
  </div>
</div>

<div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading.<span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="500x500" src="img/spot4.jpg" data-holder-rendered="true">
        </div>
      </div>







</div>


<!--footer-->
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

<!--portlimodal-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Kuala Lumpur</h2>
                            <hr class="star-primary">
                            <img src="img/spot1.jpg" class=" img-centered" alt="">
                            <p>This section will be used for the users to learn more about bingo.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Dubai</h2>
                            <hr class="star-primary">
                            <img src="img/spot2.jpg" class=" img-centered" alt="">
                            <p>This section will be used for the users to learn more about bingo.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>England</h2>
                            <hr class="star-primary">
                            <img src="img/spot3.jpg" class="img-centered" alt="">
                            <p>This section will be used for the users to learn more about bingo.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                  <ul>
                    <li><img src="img/logo/facebook.jpg"></li>
                    <li><img src="img/logo/twi.jpg"></li>
                    <li><img src="img/logo/google.jpg"></li>
                  </ul>
               </div>
               <h4>OR</h4>
               <div class="err" id="add_err"></div>
                  <fieldset>
                    <form name="loginForm">
                        <ul>
                           <li> <label for="name">Username </label>
                           <input type="text" name="name" id="name" 
                                  required
                                  placeholder="5 characters min">
                            <span style="color:red" class="formError name-error-message">
                            Username is required.
                            </span>
                           </li>
                           <li> <label for="name">Password</label>
                           <input type="password" name="password" required
                                  placeholder="Password" id="pwd">
                           <span style="color:red" class="formError pwd-error-message">
                           Password is required.
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
                  <div class="err" id="add_err"></div>
                  <fieldset>
                    <form ng-app="myApp" name="myForm" ng-controller="formController" ng-submit="processForm()">
                        <ul>
                           <li> <label for="email">Email:</label>
                           <input type="email" name="email" id="email" ng-model="email" required
                      placeholder="xx@example.com">
                           <span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
                           <span ng-show="myForm.email.$error.required">Email is required.</span>
                           <span ng-show="myForm.email.$error.email">Invalid email address.</span>
                           </span>
                           </li>

                           <li> <label for="name">Username:</label>
                           <input type="text" name="user" id="user" ng-model="user" 
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
                           <input type="password" name="password" id="password" ng-model="password" required
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
                           <input type="submit" value="Sign Up"  id="register" class="loginbutton" ng-submit="processForm()">
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
<!--music-->
<div class="htmleaf-container">
    
    <div class="htmleaf-content">
      
        <title>bucketdrums</title>

        <g id="can-2"></g>
        <g id="bucket-2"></g>
        <g id="can-3"></g>
        <g id="can-1"></g>
        <g id="bucket-3"></g>
        <g id="bucket-1"></g>
        <g id="pot-1"></g>
        <g id="pot-2"></g>
        <g id="lid-1"></g>
        <g id="cup-2"></g>
        <g id="cup-1"></g>

        <!-- Keyboard Interaction -->
        <g id="keyboard" class="hidden" opacity="0.5">
          <g id="Key-89"></g>
          <g id="Key-72"></g>
          <g id="Key-71"></g>
          <g id="Key-78"></g>
          <g id="Key-66"></g>
          <g id="Key-76"></g>
          <g id="Key-75"></g>
          <g id="Key-74"></g>
          <g id="Key-70"></g>
          <g id="Key-68"></g>
          <g id="Key-83"></g>
        </g>
      
      <!-- Audio -->
      <audio id="can1-Audio">
          <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123180/can1.mp3" preload="auto" type="audio/mp3" />
      </audio>
      <audio id="can2-Audio">
          <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123180/can2.mp3" preload="auto" type="audio/mp3" />
      </audio>
      <audio id="can3-Audio">
          <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123180/can3.mp3" preload="auto" type="audio/mp3" />
      </audio>
      <audio id="bucket1-Audio">
          <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123180/bucket1.mp3" preload="auto" type="audio/mp3" />
      </audio>
      <audio id="bucket2-Audio">
          <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123180/bucket2.mp3" preload="auto" type="audio/mp3" />
      </audio>
      <audio id="bucket3-Audio">
          <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123180/bucket3.mp3" preload="auto" type="audio/mp3" />
      </audio>
      <audio id="pot1-Audio">
          <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123180/pot1.mp3" preload="auto" type="audio/mp3" />
      </audio>
      <audio id="pot2-Audio">
          <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123180/pot2.mp3" preload="auto" type="audio/mp3" />
      </audio>
      <audio id="cup1-Audio">
          <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123180/cup2.mp3" preload="auto" type="audio/mp3" />
      </audio>
      <audio id="cup2-Audio">
          <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123180/cup1.mp3" preload="auto" type="audio/mp3" />
      </audio>
      <audio id="lid1-Audio">
          <source src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123180/lid1.mp3" preload="auto" type="audio/mp3" />
      </audio>
    </div>
  </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js'></script>
  <script type="text/javascript" src="js/music.js"></script>
</body>

</html>