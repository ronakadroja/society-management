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
  <link rel="stylesheet" href="css/style.css">
  <title>Member-Dashboard</title>
</head>

<body>
  <?php
  include "utilities/sidenavbar.php";
  ?>
  <div class="mt-5 pt-3 main">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-3 col-12">
          <div class="card text-white bg-info mb-3" style="max-width: 100%;">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <div class="col">
                  <h3 class="display-5">10</h3>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5><a class="nav-link text-light text-center" href="">View details</a></h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12">
          <div class="card text-white bg-warning mb-3" style="max-width: 100%;">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <div class="col">
                  <h3 class="display-5">100</h3>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5><a class="nav-link text-light text-center" href="">View details</a></h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12">
          <div class="card text-white bg-primary mb-3" style="max-width: 100%;">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <div class="col">
                  <h3 class="display-5">100</h3>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5><a class="nav-link text-light text-center" href="">View details</a></h5>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12">
          <div class="card text-white bg-success mb-3" style="max-width: 100%;">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <i class="fa fa-list fa-4x"></i>
                </div>
                <div class="col">
                  <h3 class="display-5">100</h3>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <h5><a class="nav-link text-light text-center" href="">View details</a></h5>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="modal fade" id="myModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: transparent; border: none;">
        <div id="jj" style="cursor: pointer;" class="text-end">
          <h1 class="text-white display-5 btn btn-danger">&times;</h1>
        </div>
        <div class="text-center">
          <img src="https://image.flaticon.com/icons/png/128/3034/3034068.png" alt="">
          <img src="https://image.flaticon.com/icons/png/128/3034/3034068.png" alt="">
          <img src="https://image.flaticon.com/icons/png/128/3034/3034068.png" alt="">
        </div>
        <div class="text-primary text-center m-2">
          <h1 class="display-4" style="font-weight: bold;color: purple;">Happy Birthday</h1>
        </div>
        <div class="text-center m-3">
          <h1 id="wish_name" class="display-3" style="font-weight:bold;color: yellow;"></h1>
        </div>
        <div class="text-center">
          <img src="https://image.flaticon.com/icons/png/128/3034/3034068.png" alt="">
          <img src="https://image.flaticon.com/icons/png/128/3034/3034068.png" alt="">
          <img src="https://image.flaticon.com/icons/png/128/3034/3034068.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <audio class="audioDemo" preload="none">
    <source src="../video/birthday.mp3" type="audio/mpeg">
    <source src="../video/birthday.mp3" type="audio/ogg">
  </audio>


  <!-- script -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  <script src="js/common.js"></script>
  <script>
    $(document).ready(function() {
      $('#active').addClass('active');
      loadNotification();
      profile_photo();
      wishBirthday();
    });
  </script>

</body>

</html>