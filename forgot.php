<?php
session_start();
include "./database/dbconn.php";
$email = $_POST['femail'];
$pass = $_POST['fpass'];
$cpass = $_POST['fcpass'];

$sql = "select * from member where email='$email'";
$run = mysqli_query($conn,$sql);
$count = mysqli_num_rows($run);
if($count)
{
    if($pass === $cpass)
    {
        $otp = rand(100000,999999);
        $subject = "To change Password !";
        $message = "Hi, your one time password(OTP) to change your password is ".$otp;
        $sender = "From: $from";
        if(mail($email,$subject,$message,$sender))
        {

            $_SESSION['otp'] = $otp;
            $_SESSION['otp-email'] = $email;
            $_SESSION['update-pass'] = $pass;
            echo "we send otp to registered email id to change password";
            
        }
        else
        {
            echo "Sorry something went wronge! Try again";
        }
    }
    else
    {
        echo "Password does not match.";
    }
}
else
{
    echo "Email Id. is not exist!";
}

?>