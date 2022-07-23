<?php
include "../../database/dbconn.php";
$email =  $_POST['email'];

$sql = "delete from member where email='$email'";
$run = mysqli_query($conn,$sql);
if($run)
{
    echo "1";
}
else
{
    echo "0";
}

?>