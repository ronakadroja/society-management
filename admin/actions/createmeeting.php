<?php
session_start();
include "../../database/dbconn.php";


$title = $_POST['title'];
$agenda = $_POST['agenda'];
$date = $_POST['date'];
$time = $_POST['time'];
$meetingPlatform = $_POST['meeting-platform'];
$meetingLink = $_POST['meeting-link'];
$username = $_SESSION['username'];

$sql1 = "select * from member where username = '$username' or email = '$username'";
$result1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result1);
$society_id = $row['society_id'];

$sql2 = "insert into meeting(society_id, title, agenda, date, time, meeting_platform, meeting_link, status) values('$society_id', '$title', '$agenda', '$date', '$time', '$meetingPlatform', '$meetingLink', 'not finished')";
$result2 = mysqli_query($conn, $sql2);
if ($result2) {
    echo "1";
} else {
    echo "0";
}

?>