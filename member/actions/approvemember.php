<?php

include "../../database/dbconn.php";

$email = $_POST['email'];
$sql = "update member set approve='approved' where email='$email'";
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