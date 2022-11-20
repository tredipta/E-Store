<?php 
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $databaseName = "estore";

    $conn = mysqli_connect($serverName, $userName, $password, $databaseName);

    if($conn){
        // echo "Connection Successful..!";
    }else{
        die("Error..! Connection failed..!");
    }

?>