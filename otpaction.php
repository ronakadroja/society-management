<?php
include "./database/dbconn.php";
session_start();

$userEmail = $_SESSION['email'];
$approve = $_SESSION['approve'];
if (isset($_POST['submit'])) {
    $userOTP = $_POST['otp'];
    $sql = "select * from member where email='$userEmail'";
    $fire = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($fire);
    if ($userOTP == $row['otp']) {
        $sql = "update member set status='active',approve='$approve' where email='$userEmail'";
        $fire = mysqli_query($conn, $sql);

        $to = $_SESSION['email'];
        $subject = "Society ID for Smart Society";
        $message = "Dear members, your SocietyID is <b>" . $_SESSION['society_id'] . "</b> Any member can do register themselves in Smart Society with reference to this SocietyID only. Please remember your SocietyID and give it to the members of your society at the time of their registration.";
        
        $sender = "MIME-Version: 1.0\r\n";
        $sender .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $sender .= "From: $from";


        if (mail($to, $subject, $message, $sender)) {
            header("location: login.php");
        } else {
            header("location: otp-page.php?msg=Failed to send the mail");
        }
    } else {
        header("location: otp-page.php?msg=Invalid OTP");
    }
}

?>

