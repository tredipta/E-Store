<?php
    session_start();
    include("dbcon.php");
?>

<?php

if(isset($_POST['register'])){
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $pwd = $_POST['pwd'];

    mysqli_select_db($conn, 'estore');

    $pass = password_hash($pwd, PASSWORD_BCRYPT);

    $emailQuery = "select * from customer where cust_email='$email' ";
    $query = mysqli_query($conn, $emailQuery);

    $emailCount = mysqli_num_rows($query);

    if($emailCount>0){
        echo"Email already exists";
    }else{
        $insertQuery = "insert into customer (cust_fName, cust_lName, cust_email, cust_contact, cust_pwd) values('$fName','$lName','$email','$contact','$pass')";
        $iQuery = mysqli_query($conn, $insertQuery);
        if($iQuery){
            header('location:../signup.php?message="Registration Successful, Please Login to your account."');
        }
    }


}

?>