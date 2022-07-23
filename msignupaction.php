<?php

include "./database/dbconn.php";

$sid = mysqli_real_escape_string($conn,$_POST['sid']);
$username = mysqli_real_escape_string($conn,$_POST['muser']);
$name = mysqli_real_escape_string($conn,$_POST['mname']);
$email = mysqli_real_escape_string($conn,$_POST['memail']);
$phone = mysqli_real_escape_string($conn,$_POST['mphone']);
$address = mysqli_real_escape_string($conn,$_POST['maddress']);
$bdate = $_POST['mbdate'];
$is_owner = $_POST['is_owner'];
$houseno = mysqli_real_escape_string($conn,$_POST['mhouseno']);
$pass = mysqli_real_escape_string($conn,$_POST['mpass']);
$cpass = mysqli_real_escape_string($conn,$_POST['mcpass']);

$sql = "select * from society where society_id='$sid'";
$run = mysqli_query($conn,$sql);
if($run)
{
    $row = mysqli_fetch_assoc($run);
    $societyType = $row['society_type'];
}

if($societyType==="Building")
{
    $flat_type = $_POST['mflat_type'];
}
else
{
    $flat_type="raw_house";
}



//checking the member user is already exist or not
$sql = "select * from member where username='$username'";
$fire = mysqli_query($conn, $sql);
$count = mysqli_num_rows($fire);
if ($count > 0) {
    echo "Username is already exist.";
}
else
{
    $sql2 = "select * from member where email='$email'";
    $fire2 = mysqli_query($conn, $sql2);
    $count2 = mysqli_num_rows($fire2);
    if ($count2 > 0) {
        echo "Email Id is already exist.";
    }
    else
    {
        if($pass===$cpass)
        {
            $OTP = rand(100000,999999);
            $subject = "Email verification for Smart Society";
            $message = "Hi, $username. To verify your email address on Smart Society as an member, your OTP(One Time Password) is " . $OTP;
            $sender = "From: $from";
            if(mail($email,$subject,$message,$sender))
            {
                $query = "insert into member(society_id, username, name, email, phone, address, dob, profile_photo, identity_photo, identity_number, password, house_no, flat_type, is_owner, occupation, occupation_details, role, otp, status,approve) values('$sid', '$username', '$name', '$email', '$phone', '$address', '$bdate', 'https://image.flaticon.com/icons/png/128/3177/3177440.png', 'none', 'none', '$pass', '$houseno', '$flat_type', '$is_owner', 'none', 'none', 'member', '$OTP', 'inactive','notapproved')";

                $fire3 = mysqli_query($conn, $query);
                if ($fire3) 
                {
                    $insert = "insert into notification(society_id,noti_from,notification) values('$sid','$name','please,approve my request to join the society')";
                    $result = mysqli_query($conn,$insert);
                    session_start();
                    $_SESSION['email'] = $email;
                    $_SESSION['approve'] = "notapproved";
                    unset($_SESSION['society_id']);
                    echo "Mail send successfully";
                }
            }
            else
            {
                echo "Failed to send an email.";
            }
        }
        else
        {
            echo "Passwords does not match.";
        }
    }
}


?>