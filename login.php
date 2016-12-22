<?php
//require_once 'mysql_connect.php';
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
//$uName = $_POST['name'];
//$pWord = md5($_POST['pwd']);
session_start();

$uName = $_POST['name'];
$pWord = $_POST['pwd'];
$qry = "SELECT user_id, username FROM users WHERE username='".$uName."' AND password='".$pWord."'";
$res = mysqli_query($conn,$qry);
$arrRS = array();
while($rs=mysqli_fetch_assoc($res)){
              $arrRS[] = $rs;
          }
$num_row = count($arrRS);

if( $num_row == 1 ) {
$row=$arrRS[0];
$_SESSION['uName'] = $row['username'];
echo 'username';
}
else {
echo 'false';
}

?>