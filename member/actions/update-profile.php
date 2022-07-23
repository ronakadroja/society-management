<?php
session_start();
include "../../database/dbconn.php";
$username = $_SESSION['username'];
$profile = $_FILES['img_file']['name'];
$profile_tmp_path = $_FILES['img_file']['tmp_name'];
$phone = $_POST['phone'];
$occupation = $_POST['occupation'];
$occu_detail = $_POST['occu-detail'];
$identity_num = $_POST['identity'];

$id_photo = $_FILES['id-photo']['name'];
$id_photo_tmp_path = $_FILES['id-photo']['tmp_name'];

$main_profile = '../../media/'.$profile;
$main_id_photo = '../../media/'.$id_photo;


$sql = "update member set phone='$phone',profile_photo='$main_profile',identity_photo='$main_id_photo',identity_number='$identity_num',occupation='$occupation',occupation_details='$occu_detail' where username='$username'";
$run = mysqli_query($conn,$sql);
if($run)
{

    move_uploaded_file($profile_tmp_path,$main_profile);
    move_uploaded_file($id_photo_tmp_path,$main_id_photo);
    echo $profile;
}
else
{
    echo "Fail to update,Try again!";
}

?>