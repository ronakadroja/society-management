<?php
include "../../database/dbconn.php";
$id = $_POST['id'];
$sql = "delete from notification where id='$id'";
$result = mysqli_query($conn,$sql);
if($result)
{
    echo "deleted";
}
else
{
    echo "not deleted";
}
?>