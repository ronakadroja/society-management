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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
    ?>
    <div class="mt-5 pt-3 main">
        <div class="container-fluid">
            <div>
                <button class="btn btn-success my-2" onclick="document.getElementById('form').style = 'display:inherit !important'" id="create-meeting-button">Create an Events</button>
            </div>
            <form action="event.php" class="my-3 d-none" id="form" method="POST">
                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="datetime-local" class="form-control" id="date" aria-describedby="emailHelp" name="date" >
                </div>
                <div class="mb-3">
                    <label for="event_name" class="form-label">Event Name</label>
                    <input type="text" class="form-control" id="event_name" aria-describedby="emailHelp" name="event_name" >
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <textarea class="form-control" id="desc" name="desc" ></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            <div class="events-details my-5">
                <h3 class="mb-4 mt-5">Events details</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Sr no.</th>
                                <th scope="col">Event</th>
                                <th scope="col" style="width: 30%;">Description</th>
                                <th scope="col">Date</th>
                                <th scope="col">Member Id</th>
                                <th scope="col">Society Id</th>
                            </tr>
                        </thead>
                        <tbody id="events-details-table-body">
                            <?php
                            $username = $_SESSION['email'];
                            $sql1 = "select * from member where username = '$username' or email = '$username'";
                            $result1 = mysqli_query($conn, $sql1);
                            $row = mysqli_fetch_assoc($result1);
                            $society_id = $row['society_id'];

                            $sql2 = "select * from events where society_id = '$society_id' and status='Approve'";
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
                                        <td> ' . $row2['society_id'] . ' </td>
                                    </tr>';
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $sql = "select * from member where username='" . $_SESSION['email'] . "'";
        $res = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($res);
        $sql = "insert into events(`event_name`, `description`, `Date`, `member_id`, `society_id`) values('" . $_POST['event_name'] . "','" . $_POST['desc'] . "','" . $_POST['date'] . "','" . $row['email'] . "','" . $row['society_id'] . "')";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "<script>swal('Successfully send!', 'You clicked the button!', 'success');</script>";
        } else {
            echo "<script>swal('Something went wrong!', 'You clicked the button!', 'error');</script>";
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