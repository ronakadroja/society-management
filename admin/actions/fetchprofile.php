<?php

session_start();
include "../../database/dbconn.php";
$username = $_SESSION['username'];
$sql = "select * from member where username='$username'";
$run = mysqli_query($conn,$sql);
$count = mysqli_num_rows($run);
if($count)
{
    
    $row = mysqli_fetch_assoc($run);
   
}

echo json_encode($row);
?>