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
</head>

<body>
    <?php include "utilities/sidenavbar.php" ?>
    <div class="pt-4 main">
        <div class="container-fluid px-3 py-5">
            <div id="error" class='d-none alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>Error!</strong> This vehicle is already register in database.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            <div id="error1" class='d-none alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>Error!</strong> Something went wrong.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            <div>
                <button class="btn btn-success my-2" onclick="document.getElementById('form').style = 'display:inherit !important'" id="create-meeting-button">Add Vehicle</button>
            </div>
            <form id="form" class='d-none' action="parking.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="vehicle_number" class="form-label">Vehicle Number</label>
                    <input type="text" class="form-control" name="vehicle_number" id="vehicle_number" aria-describedby="vehicle">
                </div>
                <div class="mb-3">
                    <label for="rc_book" class="form-label">RC Book</label>
                    <input type="file" class="form-control" name="rc_book" id="rc_book">
                </div>
                <label for="bike" class=" my-2">Vehicle Type : </label>
                <div class="form-check-inline my-2">
                    <input class="form-check-input" type="radio" value="Car" name="type" id="car">
                    <label class="form-check-label" for="car">
                        Car
                    </label>
                </div>
                <div class="form-check-inline my-2">
                    <input class="form-check-input" type="radio" value="Bike" name="type" id="bike">
                    <label class="form-check-label" for="bike">
                        Bike
                    </label>
                </div><br>
                <button type="submit" class="btn btn-primary my-2 mb-5" name="submit">Submit</button>
            </form>
            <h3 class="mb-4">Vehicle details</h3>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover ">
                    <thead align="center">

                        <tr>
                            <th scope="col">Sr no.</th>
                            <th scope="col">Vehicle Number</th>
                            <th scope="col">Vehicle Type</th>
                            <th scope="col">#</th>
                        </tr>
                    </thead>
                    <tbody id="events-details-table-body" align="center">
                        <?php

                        $sql = "select * from parking where member_id = '" . $_SESSION['email'] . "'";
                        $result = mysqli_query($conn, $sql);
                        $count = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $count++;
                            echo '<tr>
                                        <td> ' . $count . ' </td>
                                        <td> ' . $row['vehicle_number'] . ' </td>
                                        <td> ' . $row['type'] . ' </td>
                                        <td> <form method="POST"><button class="btn-sm btn-danger" name="delete" value="' . $row['vehicle_number'] . '">Delete</button></form> </td>
                                    </tr>';
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['delete'])) {
        $sql = "delete from parking where vehicle_number='" . $_POST['delete'] . "'";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            echo "<script>window.location.replace('parking.php')</script>";
        } else {
            echo "<script>document.getElementById('error1').style='display:inherit !important'</script>";
        }
    }
    if (isset($_POST['submit'])) {
        $rc_book = $_FILES['rc_book']['name'];
        $rc_book_tmp_path = $_FILES['rc_book']['tmp_name'];
        $main_rc_book = '../media/' . $rc_book;

        $sql1 = "select * from member where email = '" . $_SESSION['email'] . "'";
        $result1 = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_assoc($result1);
        $society_id = $row['society_id'];

        $sql = "insert into parking(vehicle_number,type,rc_book,member_id,society_id) values('" . $_POST['vehicle_number'] . "','" . $_POST['type'] . "','" . $main_rc_book . "','" . $_SESSION['email'] . "','" . $society_id . "')";
        $res = mysqli_query($conn, $sql);
        if ($res) {
            move_uploaded_file($rc_book_tmp_path, $main_rc_book);
            echo "<script>window.location.replace('parking.php')</script>";
        } else {
            echo "<script>document.getElementById('error').style='display:inherit !important'</script>";
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