<? php
//require_once 'mysql_connect.php';
header("Content-Type: application/json; charset=UTF-8");


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

$data = file_get_contents("php://input");  
$user = json_decode($data);  

// $uName = $_POST['username'];
// $pWord = $_POST['pwd'];
// $email = $_POST['email'];


// $qry = "INSERT INTO users(username,email,password) 
// VALUES ('".$uName."','".$email."','".$pWord."');";
// // $res = mysqli_query($conn,$qry);
// // $arrRS = array();
// // while($rs=mysqli_fetch_assoc($res)){
// //               $arrRS[] = $rs;
// //           }
// // $num_row = count($arrRS);

// if( mysqli_query($conn,$qry) ) {
// alert("okkkkk");
// $_SESSION['uName'] = $uName;
// echo 'username';
// }
// else {
// echo 'false';
// }

?>