<?php

use function PHPSTORM_META\type;

session_start();
include "./database/dbconn.php";
$otp = $_POST['otp'];
$verify_otp = $_SESSION['otp'];
$verify = strval($verify_otp);
$email = $_SESSION['otp-email'];
$pass = $_SESSION['update-pass'];

if($otp === $verify)
{
    $sql2 = "update member set password='$pass' where email='$email'";
    $run2 = mysqli_query($conn,$sql2);
    if($run2)
    {
        unset($_SESSION['otp']);
        unset($_SESSION['otp-email']);
        unset($_SESSION['update-pass']);
        echo "Updated Successfully";
    }
}
else
{
    echo "Invalid OTP! Please Enter Valid OTP..";
}

?>