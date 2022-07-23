<?php
session_start();
include "../../database/dbconn.php";
$username = $_SESSION['username'];
$sql = "select * from member where username='$username'";
$run = mysqli_query($conn,$sql);
$count = mysqli_num_rows($run);
if($count)
{
    $output="";
    $row = mysqli_fetch_assoc($run);
    $sid = $row['society_id'];
    $sql2 = "select * from member where society_id='$sid' and role='member'";
    $run2 = mysqli_query($conn,$sql2);
    
    while($row1 = mysqli_fetch_assoc($run2))
    {
        if($row1['approve']==="approved")
        {
            $output.="<tr>
            <td>{$row1["name"]}</td>
            <td>{$row1['email']}</td>
            <td>{$row1['phone']}</td>
            <td>{$row1['address']}</td>
            <td><button class='btn btn-sm btn-primary' disabled>verified</button></td>
            </tr>";
        }
        else
        {
            $output.="<tr>
            <td>{$row1["name"]}</td>
            <td>{$row1['email']}</td>
            <td>{$row1['phone']}</td>
            <td>{$row1['address']}</td>
            <td><button class='btn btn-sm btn-success mx-1 approve' data-email='{$row1['email']}'><i class='fa fa-check'></i></button><button class='btn btn-sm btn-danger mx-1 delete' data-email='{$row1['email']}'><i class='fa fa-trash'></i></button></td>
            </tr>";
        }
        
    }

    echo $output;
    
}

?>