<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: ../login.php");
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
    <style>
        form div label {
            width: 250px;
        }

        .agenda * {
            vertical-align: top;
        }

        .agenda textarea {
            resize: none;
        }

        .form-input {
            margin: 20px 0;
        }

        .form-input input,
        .form-input select {
            width: 300px;
        }

        .form-input input,
        .form-input select,
        .form-input textarea {
            padding: 2px 5px;
            outline: none;
        }

        thead {
            background-color: #0d6efd;
            color: white;
        }

        thead th {
            text-align: center;
            vertical-align: middle;
        }

        #create-meeting-form {
            display: none;
        }
    </style>
</head>

<body>
    <?php
    include "utilities/sidenavbar.php";
    ?>

    <div class="pt-4 main">
        <div class="container-fluid px-3 py-5">
            <div id="alert" class="alert d-none"></div>
            <div>
                <button class="btn btn-success my-2" id="create-meeting-button">Create a meeting</button>
            </div>

            <form method="post" id="create-meeting-form">
                <h4>Enter the meeting details</h4>
                <div class="form-input">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" required>
                </div>

                <div class="agenda form-input">
                    <label for="agenda">Agenda</label>
                    <textarea name="agenda" id="agenda" cols="100" rows="5"></textarea>
                </div>

                <div class="form-input">
                    <label for="date">Date</label>
                    <input type="date" name="date" id="date" required>
                </div>

                <div class="form-input">
                    <label for="time">Time</label>
                    <input type="time" name="time" id="time" required>
                </div>

                <div class="form-input">
                    <label for="meeting-platform">Meeting Platform</label>
                    <select name="meeting-platform" id="meeting-platform" required>
                        <option disabled="disabled" selected="true">Select</option>
                        <option value="Google Meet">Google Meet</option>
                        <option value="Zoom">Zoom</option>
                        <option value="Microsoft Teams">Microsoft Teams</option>
                        <option value="Google Duo">Google Duo</option>
                        <option value="Skype">Skype</option>
                        <option value="Offline meeting">Offline meeting</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-input">
                    <label for="meeting-link">Meeting Link (in case of online meeting)</label>
                    <input type="text" name="meeting-link" id="meeting-link">
                </div>

                <div class="form-input">
                    <button type="submit" id="create" class="btn btn-success my-3 px-5" name="submit">Create</button>
                </div>

            </form>



            <div class="meeting-details">
                <h3 class="mb-4 mt-5">Meeting details</h3>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col">Agenda</th>
                                <th scope="col">Date</th>
                                <th scope="col" style="width:8%;">Time</th>
                                <th scope="col">Meeting Platform</th>
                                <th scope="col">Link (in case of online meeting)</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody id="meeting-details-table-body">
                            
                            
                            <?php
                            include "../database/dbconn.php";

                            $username = $_SESSION['username'];
                            $sql1 = "select * from member where username = '$username' or email = '$username'";
                            $result1 = mysqli_query($conn, $sql1);
                            $row = mysqli_fetch_assoc($result1);
                            $society_id = $row['society_id'];

                            $sql2 = "select * from meeting where society_id = '$society_id'";
                            $result2 = mysqli_query($conn, $sql2);
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                echo '<tr>
                                        <td> ' . $row2['title'] . ' </td>
                                        <td> ' . $row2['agenda'] . ' </td>
                                        <td> ' . $row2['date'] . ' </td>
                                        <td> ' . $row2['time'] . ' </td>
                                        <td> ' . $row2['meeting_platform'] . ' </td>
                                        <td> ' . $row2['meeting_link'] . ' </td>
                                        <td> ' . $row2['status'] . ' </td>
                                    </tr>';
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
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

    <script>
        let createMeetingButton = document.getElementById('create-meeting-button');
        let createMeetingForm = document.getElementById('create-meeting-form');
        createMeetingButton.addEventListener('click', function() {
            createMeetingButton.style.display = 'none';
            createMeetingForm.style.display = 'block';
        });

        $('#create').click(function(e) {
            e.preventDefault();

            $.ajax({
                url: './actions/createmeeting.php',
                method: 'POST',
                data: $('#create-meeting-form').serialize(),
                success: function(response) {
                    console.log(response);
                    if (response == '1') {
                        $('#alert').removeClass('alert-danger d-none').addClass('alert-success').html("Your meeting has been created successfully");
                        window.location.reload();
                    } else {
                        $('#alert').removeClass('alert-success d-none').addClass('alert-danger').html("Your meeting has not been created.");
                    }
                }
            });
        });
    </script>



</body>

</html>