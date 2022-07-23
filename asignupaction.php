<?php
include "./database/dbconn.php";

//Society Registration
$societyName = mysqli_real_escape_string($conn, $_POST['sr_name']);
$societyAddress = mysqli_real_escape_string($conn, $_POST['sr_add']);
$societyCity = mysqli_real_escape_string($conn, $_POST['sr_city']);
$societyState = mysqli_real_escape_string($conn, $_POST['sr_state']);
$societyPinCode = mysqli_real_escape_string($conn, $_POST['sr_pin']);
$societyCountry = mysqli_real_escape_string($conn, $_POST['sr_country']);

//Society Details
$societyType = mysqli_real_escape_string($conn, $_POST['society_type']);
if ($societyType === "Building") {
    $numberOfHouse = $_POST['sd_floor'];
    $flatType = implode(',', $_POST['flat_type']);
    $adminFlatType = $_POST['aflat_type'];
    $adminHouseNo = $_POST['aflat_no'];
} else {
    $numberOfHouse = $_POST['no_of_house'];
    $adminHouseNo = $_POST['shouse_no'];
    $adminFlatType = 'raw_house';
    $flatType = 'raw_house';
}

//Admin Details
$adminUser = $_POST['auser'];
$adminName = mysqli_real_escape_string($conn, $_POST['aname']);
$adminEmail = mysqli_real_escape_string($conn, $_POST['aemail']);
$adminPhone = mysqli_real_escape_string($conn, $_POST['aphone']);
$adminAddress = mysqli_real_escape_string($conn, $_POST['aaddress']);
$adminBirthDate = $_POST['abdate'];
$adminOwnerType = $_POST['is_owner'];
$adminPass = mysqli_real_escape_string($conn, $_POST['apass']);
$adminCpass = mysqli_real_escape_string($conn, $_POST['acpass']);


//checking the admin user is already exist or not
$sql = "select * from member where username='$adminUser'";
$fire = mysqli_query($conn, $sql);
$count = mysqli_num_rows($fire);
if ($count > 0) {
    echo "Username is already exist.";
} 
else {
    $sql2 = "select * from member where email='$adminEmail'";
    $fire2 = mysqli_query($conn, $sql2);
    $count2 = mysqli_num_rows($fire2);
    if ($count2 > 0) {
        echo "Email Id is already exist.";
    } 
    else {
        if ($adminPass === $adminCpass) {
            $societyID =  "sid" . rand(100000, 999999);
            $sql4 = "select * from society where society_id='$societyID'";
            $fire4 = mysqli_query($conn, $sql4);
            $rowCount = mysqli_num_rows($fire4);
            if($rowCount) {
                echo "SocietyID already exists";
            }
            else {
            $OTP = rand(100000, 999999);

            $sql = "insert into society(society_id, society_name, society_address, society_type, number_of_house, rules, city, state, pincode, country) values('$societyID', '$societyName', '$societyAddress', '$societyType', '$numberOfHouse', 'none', '$societyCity', '$societyState', '$societyPinCode', '$societyCountry')";
            $fire = mysqli_query($conn, $sql);
            
            $sql3 = "insert into society_details(society_id, flat_type, maintenance_amount, penalty_amount) values('$societyID', '$flatType', '0', '0')";
            $fire3 = mysqli_query($conn, $sql3);

                if ($fire) {
                    $subject = "Email verification for Smart Society";
                    $message = "Hi, $adminUser. To verify your email address on Smart Society as an admin, your OTP(One Time Password) is " . $OTP;
                    $sender = "From: $from";

                    if (mail($adminEmail, $subject, $message, $sender)) {
                        $sql2 = "insert into member(society_id, username, name, email, phone, address, dob, profile_photo, identity_photo, identity_number, password, house_no, flat_type, is_owner, occupation, occupation_details, role, otp, status,approve) values('$societyID', '$adminUser', '$adminName', '$adminEmail', '$adminPhone', '$adminAddress', '$adminBirthDate', 'https://image.flaticon.com/icons/png/128/3135/3135715.png', 'none', 'none', '$adminPass', '$adminHouseNo', '$adminFlatType', '$adminOwnerType', 'none', 'none', 'admin', '$OTP', 'inactive','notapproved')";

                        $fire2 = mysqli_query($conn, $sql2);
                        if ($fire2) {
                            session_start();
                            $_SESSION['email'] = $adminEmail;
                            $_SESSION['society_id'] = $societyID;
                            $_SESSION['approve'] = "approved";
                            echo "Mail send successfully";
                        }
                    } 
                    else {
                        echo "Failed to send an email.";
                    }
                } 
                else {
                echo "Sorry! Your society has not been registered due to some error. Try again.";
            }
            }
        }
        else {
            echo "Passwords does not match.";
        }
    }
}

?>