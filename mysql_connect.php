<?php # Script 7.2 - mysql_connect.php

// This file contains the database access information. 
// This file also establishes a connection to MySQL and selects the database.

// Set the database access information as constants.

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
            

// Select the database.
//@mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );
?>