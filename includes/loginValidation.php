<?php
    session_start();
    include("dbcon.php");
?>

<?php

if(isset($_POST['login'])){
   
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    mysqli_select_db($conn, 'estore');


    $emailQuery = "select * from customer where cust_email='$email' ";
    $query = mysqli_query($conn, $emailQuery);

    if(mysqli_num_rows($query)>0){
        $row = mysqli_fetch_assoc($query);
        $verify = password_verify($pwd,$row['cust_pwd']);
        if($verify == 1){
            $_SESSION['id']=$row['cust_id'];
            $_SESSION['name']=$row['cust_fName'];
            if(isset($_SESSION['id'])){
                header("location:../index.php");
            }
        }else{
            header("location:../login.php?message='Please enter correct credential.'");
        }
    }else{
        
            header('location:../login.php?message="Oooho, You need to register first."');
    }


}

?>