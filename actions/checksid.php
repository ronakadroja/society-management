<?php

include "../database/dbconn.php";

$societyID = $_POST['sid'];
$sql = "select * from society where society_id = '$societyID'";//ckeck admin status
$result = mysqli_query($conn, $sql);
$countRow = mysqli_num_rows($result);
if($countRow) {
    $sql1="select * from member where society_id='$societyID' and role='admin' and status='active'";
    $run = mysqli_query($conn,$sql1);
    $count = mysqli_num_rows($run);
    if($count>0)
    {
        $row = mysqli_fetch_assoc($result);
        echo $row['society_type'];
    }
    else
    {
        echo "Society admin has not been verified yet";
    }
    
}
else {
    echo "Invalid SocietyID";
}

?>