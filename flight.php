<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <html xmlns="http://www.w3.org/1999/xhtml">
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
<script src="js/home.js"></script>
<script src="js/travel.js"></script>
<script src="js/login.js"></script>
<!--Custom css-->
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/travel.css">
<style>
input[type=text] {
  width: 150px;
  -webkit-transition: width .35s ease-in-out;
  transition: width .35s ease-in-out;
}
input[type=text]:focus {
  width: 250px;
}

input[type="checkbox"]{
  width: 30px;
  height: 30px;
}
.model-input{
   background-color:rgb(215, 215, 215);
   border-radius: 3;
   margin-left: 10px;

}

.select{
  position: relative;
display: inline-block;
width: auto;
min-width: 220px;
vertical-align: top;
}


.select2-offscreen{
  position: absolute !important;
top: 0 !important;
left: 0 !important;
width: 1px !important;
height: 1px !important;
padding: 0 !important;
margin: 0 !important;
overflow: hidden !important;
clip: rect(0 0 0 0) !important;
border: 0 !important;
outline: 0 !important;
}


</style>
</head>
    <body>
        <?php 
           $type=$_POST['type'];
           $depart=$_POST['depart'];
           $arrive=$_POST['arrive'];
           $departtime=$_POST['departtime'];
           $timeTrans=date("Y-m-d",strtotime($departtime));
           $returntime=$_POST['returntime'];
           $adults=$_POST['adults'];
           $seniors=$_POST['seniors'];
           $children=$_POST['children'];
           $cabinclass=$_POST['cabinclass'];

            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbName="travelDB";
            // 创建连接
            $conn = mysqli_connect($servername, $username, $password,$dbName);
            // 检测连接
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $qry = "SELECT * FROM flights WHERE departcity='".$depart."' AND arrivecity='".$arrive."'";
            $res = mysqli_query($conn,$qry);
            $arrRS = array();
            while($rs=mysqli_fetch_assoc($res)){
              $arrRS[] = $rs;
            }
            $num_row = count($arrRS);
             $results=array();
            for($i=0;$i<$num_row;$i++){
              $time=$arrRS[$i]["departtime"];
              $day=date("Y-m-d",strtotime($time));
              if($day==$timeTrans){
                $results[]=$arrRS[$i];
              }
            }
            $height=count($results)*170+250;

        ?>
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


<?php echo "<div class=\"tickets-container\" style=\"height:".$height."px\">";?>
    <div class="left-bar">
         <div class="bar-container">
            <h2>Narrow Your Results</h2>
            <hr>
            <div class="adimg">
            </div>
            <div id="accordion">
                <h3>Stops</h3>
                <div class="stops">
                  <div class="innerbar">
                  <form name="stopform" action="" method="post">
                  <div class="cell">
                    <input type="checkbox" name="stops" value="Nonstop">&nbspNonstop</h4><br>
                  </div>
                  <div class="cell">
                     <input type="checkbox" name="stops" value="onestop">&nbspOne stop<br>
                  </div>
                  <div class="cell">
                     <input type="checkbox" name="stops" value="twostop">&nbsp Up to 2+ stops<br>
                  </div>
                </form>
                </div>
                </div>
                <h3>Ticket Types</h3>
                <div class="ticty">
                  <div class="cell-row">
                     <div class="cell">
                      <h4>Adult</h4>
                      <p>$199</p>
                     </div>
                     <div class="cell">
                      <h4>Senior</h4>
                      <p>$186</p>
                     </div>
                  </div>
                  <div class="cell-row">
                      <div class="cell">
                        <h4>Youth</h4>
                        <p>$199</p>
                      </div>
                     <div class="cell">
                        <h4>Discount</h4>
                        <p>$186</p>
                     </div>
                  </div>
                </div>
                <h3>Depart Times</h3>
                <div class="innerbar">
                   <h4>Depart from Boston:</h4>
                   <div class="sli">
                    <p>
                    <label for="amount">Depart time range:</label>
                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    </p>
 
                    <div id="slider-range" class="changeui"></div>
                   </div>
                </div>
            </div>
         </div>
    </div>
    <div class="ticketsbox">
        <p>* All fares below were last found on : Feb 26, 2016 at 2:17:23 AM. Fares are round trip. Fares incl. all fuel surcharges, our service fees and taxes. Displayed fares are based on historical data, are subject to change and cannot be guaranteed at the time of booking. See all booking terms and conditions</p>
        <hr>
        <?php 
         echo"<h3 class=\"ticket-title\">Choose from <em>".$num_row."</em> departing flights</h3>"; 
         echo "<div class=\"ticket-table\">
               <div class=\" trow tickets-header\">
               <div class=\"thc\">Price</div>
               <div class=\"thc another\">Airline</div>
               <div class=\"thc another\">Departure</div>
               <div class=\"thc another\">Arrival</div>
               <div class=\"thc another\">Duration</div>
               <div class=\"thc another\">Stops</div>
               </div>";
          $length=count($results);
          for($j=0;$j<$length;$j++){
            $dday=date("Y-m-d",strtotime($results[$j]['departtime']));

            echo "<div class=\" trow tickets-infor\">
                  <div class=\"thc\">
                  <h5>".$results[$j]['price']."</h5>
                  <span>Round Trip</span>
                  <p>per person</p>
                  <form name=\"ticket\" action=\"\" method=\"post\">
                  <input type=\"hidden\" value=\"\" name=\"flight\">
                  <input typ=\"button\" value=\"Choose\">
                  </form>
                  </div>
                  <div class=\"thc\">
                  <img src=\"img/logo/airLogo_B6sm.gif\">
                  <p class=\"an\">Jetblue</p>
                  <p class=\"an\">Flight 345</p>
                  </div>
                  <div class=\"thc time\">
                  <h6>".$dday."</h6>
                  <p>8:40 am</p>
                  <p class=\"des\">".$results[$j]['departcity']."</p>
                  </div>
                  <div class=\"thc time\">
                  <h6>May 20th, 2016</h6>
                  <p>8:40 am</p>
                  <p class=\"des\">".$results[$j]['arrivecity']."</p>
                  </div>
                  <div class=\"thc time\">
                  <p class=\"ind\">4h</p>
                  </div>
                  <div class=\"thc time\">
                  <p class=\"ind\">no stops</p>
                  </div></div>";

          }
          echo"</div>";
        










        ?>





    </div>
</div>
<!--footer-->
<footer>
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p><a data-toggle="modal" data-target="#MapModal" style="color:white;">Northeastern University</p>
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
                        <p>Zhi Li: <a href="mailto:li.zhi3@husky.neu.edu" style="color:white;">li.Zhi3@husky.neu.edu</a></p>
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
    </body>
</html>