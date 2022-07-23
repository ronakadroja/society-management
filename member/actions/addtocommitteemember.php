<?php
include "../../database/dbconn.php";
$email = $_POST['email'];

$sql = "update member set role = 'committee member' where email = '$email'";
$result = mysqli_query($conn, $sql);

if ($result) {
    
    echo 'Successfully add committee member.';
} 
else {

    echo 'Failed to add commitee member!';

}
?>