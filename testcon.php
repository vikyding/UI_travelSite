<?php
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
            else{
            	echo"connect succcessfully";
            }



//$uName = $_POST['name'];
//$pWord = md5($_POST['pwd']);
$uName = $_POST['name'];
$pWord = md5($_POST['pwd']);
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
$_SESSION['uid'] = $row['user_id'];
echo 'true';
}
else {
echo 'false';
}

?>