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
    $sql2 = "select * from member where society_id='$sid' and role='committee member'";
    $run2 = mysqli_query($conn,$sql2);
    
    while($row1 = mysqli_fetch_assoc($run2))
    {
        $sno = 1;
        
            $output.="<tr>
            <td>" . $sno++ . "</td>          
            <td>{$row1["name"]}</td>
            <td>{$row1["address"]}</td>
            <td>{$row1["email"]}</td>
            <td>{$row1['phone']}</td>
            <td><button class='btn btn-sm btn-danger rm_committee' data-email='{$row1['email']}'>Remove</button></td>
            </tr>";
    }

    if($output=="")
    {
        $output.="<tr class='text-center'>
            <td colspan='6'>No Committee Members</td>
        </tr>";
        echo $output;
    }
    else
    {

        echo $output;
    }

}
?>