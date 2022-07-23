<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../login.php");
}
include "../database/dbconn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/smartsociety.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Member-Dashboard</title>
    <style>
        thead {
            background-color: #0d6efd;
            color: white;
        }

        #add-committee-member-table_length {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php
    include "utilities/sidenavbar.php";
    $sql = "select * from  member where email='".$_SESSION['email']."'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $sql = "select * from member where role='committee member' and society_id='".$row['society_id']."'";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        die("Something went wrong!");
    } else {
        echo "<div class='mt-5 pt-3 main'>" .
            "<div class='container-fluid p-3'>" .
            "<div class='committee-members'>" .
            "<h3 class='mb-4'>Committee Members</h3>" .
            "<div class='table-responsive'>" .
            "<table class='table table-striped table-bordered'>" .
            "<thead><tr>" .
            "<th scope='col'>Sr. No.</th>" .
            "<th scope='col'>Name</th>" .
            "<th scope='col'>Address</th>" .
            "<th scope='col'>Email</th>" .
            "<th scope='col'>Phone number</th>" .
            "</tr>" .
            "</thead>";
        $count = 0;
        if (mysqli_num_rows($res)) {
            while ($row = mysqli_fetch_assoc($res)) {
                $count++;
                echo "<tbody id='rows1'>" .
                    "<tr>" .
                    "<td>{$count}</td>" .
                    "<td>{$row['name']}</td>" .
                    "<td>{$row['address']}</td>" .
                    "<td>{$row['email']}</td>" .
                    "<td>{$row['phone']}</td>" .
                    "</tr>" .
                    "</tbody>" .
                    "</table>" .
                    "</div></div></div></div>";
            }
        }
    }
    ?>

    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script src="js/common.js"></script>

</body>

</html>