<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/smartsociety.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/signup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Smart Society | Email verification</title>
</head>

<body>
<?php
    if(isset($_SESSION['society_id']))
    {
       ?>
        <script>
            swal("<?=$_SESSION['society_id'] ?>", "Note down your SocietyID or take a screenshot of it. ", "success");
        </script>

       <?php 
    }

?>
    

    <div class="img"></div>
    <div class="signup-form">
        <div class="main" id="main">

            <form action="otpaction.php" method="post">
                <?php
                if (isset($_SESSION['email'])) {
                    echo '<div class="alert alert-success text-center">Please enter the OTP sent to '
                        . $_SESSION['email'] .
                        '</div>';
                }
                ?>

                <div class="form-group">
                    <h2>OTP verification</h2>
                </div>

                <?php
                if (isset($_GET['msg'])) {
                    echo '<div class="alert alert-danger text-center">'
                        . $_GET['msg'] .
                        '</div>';
                }
                ?>

                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/3596/3596156.png" height="20" width="20"></span>
                            </span>
                        </div>
                        <input type="text" name="otp" class="form-control" placeholder="Enter OTP" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <button class="btn btn-primary btn-lg b1" type="submit" name="submit" style="min-width: 100px; margin-left: 28%;">Verify</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <!-- Script starts here -->
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
</body>

</html>