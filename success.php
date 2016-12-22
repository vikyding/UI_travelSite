<?php
 session_start();
 if(isset($_SESSION['uName'])){
  echo $_SESSION['uName'];
}
else{
  echo "";
}
  
?>