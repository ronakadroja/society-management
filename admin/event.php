<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../login.php");
}
include("../database/dbconn.php");
if (isset($_POST['approve'])) {
    $sql = "update events set status='approve' where event_name = '" . $_POST['approve'] . "'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo "<script>window.loaction.replace('event.php')</script>";
    } else {
        echo "<script>alert('somhing went wrong')</script>";
    }
}
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
    <title>Admin-Dashboard</title>
</head>

<body>
    <?php
    include "utilities/sidenavbar.php";
    ?>
    <div class="pt-4 main">
        <div class="container-fluid px-3 py-5">
            <div class="events-details my-5">
                <h3 class="mb-4 mt-5">Events details</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Sr no.</th>
                                <th scope="col">Event Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Date</th>
                                <th scope="col">Member Id</th>
                                <th scope="col">Society Id</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody id="events-details-table-body">
                            <?php
                            include "../database/dbconn.php";

                            $username = $_SESSION['email'];
                            $sql1 = "select * from member where username = '$username' or email = '$username'";
                            $result1 = mysqli_query($conn, $sql1);
                            $row = mysqli_fetch_assoc($result1);
                            $society_id = $row['society_id'];

                            $sql2 = "select * from events where society_id = '$society_id'";
                            $result2 = mysqli_query($conn, $sql2);
                            $count = 0;
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $count++;
                                echo '<tr>
                                    <td> ' . $count . ' </td>
                                    <td> ' . $row2['event_name'] . ' </td>
                                    <td> ' . $row2['description'] . ' </td>
                                    <td> ' . $row2['Date'] . ' </td>
                                    <td> ' . $row2['member_id'] . ' </td>
                                    <td> ' . $row2['society_id'] . ' </td>';
                                if ($row2['status'] == "notApprove") {
                                    echo ' <td> <form method="POST" id="form"><button name="approve" class="btn-sm btn-success" value="' . $row2['event_name'] . '">Approve</button> </form> </td>';
                                } else {
                                    echo ' <td> <h6 id="approve"> Approved <h6> </td>';
                                }
                                echo '</tr>';
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <script src="js/common.js"></script>
</body>

</html>