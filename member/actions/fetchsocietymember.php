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
        $sno = 1;
        if($row1['approve']==="approved" && $row1['role'] === "member")
        {
            $output.="<tr>
            <td>" . $sno++ . "</td>          
            <td>{$row1["name"]}</td>
            <td>{$row1['phone']}</td>
            <td><button class='btn btn-sm btn-success committee' data-email='{$row1['email']}'>Add</button></td>
            </tr>";
        }
    }

    if($output=="")
    {
        $output.="<tr class='text-center'>
            <td colspan='4'>No Members in Society </td>
        </tr>";
        echo $output;
    }
    else
    {

        echo $output;
    }
}
?>