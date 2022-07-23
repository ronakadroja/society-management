<?php
session_start();
include "../../database/dbconn.php";
$username = $_SESSION['username'];
$sql = "select * from member where username='$username'";
$run = mysqli_query($conn,$sql);
$count = mysqli_num_rows($run);
if($count)
{
    $output ="";
    $row = mysqli_fetch_assoc($run);
    $sid = $row['society_id'];
    $sql2 = "select * from notification where society_id='$sid'";
    $run2 = mysqli_query($conn,$sql2);
    while($row1 = mysqli_fetch_assoc($run2))
    {
        $output.="<div class='row'>
        <div class='col-3 col-md-3'>
            <img src='https://image.flaticon.com/icons/png/128/3616/3616595.png' width='20' height='20' alt='profile'/>
            <small class='text-success'>new</small>
        </div>
        <div class='col-9 col-md-9'>
            <small>{$row1['noti_from']}</small>
            <a id='{$row1['id']}' class='nav-link p-0 remove-notification' href='member-verification.php'>{$row1['notification']}</a>
        </div>
        
    </div>
    <hr class='dropdown-divider'>";
        
    }

    
    if($output=="")
    {
        echo "<div class='text-center'>
        <img src='https://image.flaticon.com/icons/png/128/4076/4076478.png' width='60' height='60' alt='profile'/>     
        </div>
        <div class='text-danger text-center mt-3'>Empty !</div>";
        
    }
    else
    {
        echo $output;
    }

    

}


?>

