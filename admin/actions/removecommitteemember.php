<?php
include "../../database/dbconn.php";
$email = $_POST['email'];

$sql = "update member set role = 'member' where email = '$email'";
$result = mysqli_query($conn, $sql);

if ($result) {
    
    echo 'Successfully remove committee member.';
} 
else {

    echo 'Failed to remove commitee member!';

}
?>