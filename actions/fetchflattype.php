<?php

include '../database/dbconn.php';
$sid = $_POST['sid'];
$sql = "select * from society_details where society_id='$sid'";;
$run = mysqli_query($conn,$sql);
if($run)
{
    $row = mysqli_fetch_assoc($run);
    $flat_type = $row['flat_type'];
    $flat_type1 = explode(',',$flat_type);
    $len = count($flat_type1);
    
    $output="";
    for($i=0;$i<=$len-2;$i++)
    {
        $output.="<option value=$flat_type1[$i]>$flat_type1[$i]</option>";
    }
    
    echo $output;


}
?>