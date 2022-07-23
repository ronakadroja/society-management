<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/smartsociety.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/signup.css">
    <title>SmartSociety - Login</title>
    <style>
        .alert-dismissible .btn-close {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            padding: .8rem 1rem 1.2rem;
        }

        .btn-close {
            box-sizing: content-box;
            width: 1em;
            height: 1em;
            padding: .25em .25em;
            color: #000;
            border: 0;
            border-radius: .25rem;
            opacity: .5;
        }
    </style>
</head>
<body>
    
<div class="img"></div>
    <div class="signup-form">
        <div class="main" id="main">
        <form id="form3">
                <h2>Login</h2>
                <hr>
                <div id="alert1"></div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/1177/1177568.png" height="20" width="20"></span>
                            </span>
                        </div>
                        <input id="useremail" type="text" class="form-control" name="useremail" placeholder="Username or Email id." required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/3064/3064211.png" height="20" width="20"></span>
                            </span>
                        </div>
                        <input type="password" id="pass" class="form-control" name="pass" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <a class="text-primary" href="" data-bs-toggle="modal" data-bs-target="#forgotpassword">Forgot password?</a>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group d-flex justify-content-center">
                        <button class="btn btn-primary btn-lg" type="submit" style="min-width: 100px;" id="next-button"><i class="fa fa-spinner fa-spin d-none loading-spinner" aria-hidden="true"></i>Login</button>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group d-flex justify-content-center">
                        <a class="text-primary" href="signup.php">Don't have an account?</a>
                    </div>
                </div>

        </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="forgotpassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">&times;</button>
      </div>
      <form id="form4">
      <div id="alertmsg" class="m-3"></div>
        <div class="modal-body"> 
                <div class="form-group" id="rm_email">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/1177/1177568.png" height="20" width="20"></span>
                            </span>
                        </div>
                        <input type="email" id="femail" class="form-control" name="femail" placeholder="Email Id.">
                    </div>
                </div>
                <div class="form-group" id="rm_pass">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/3064/3064211.png" height="20" width="20"></span>
                            </span>
                        </div>
                        <input type="password" id="fpass" class="form-control" name="fpass" placeholder="Password">
                    </div>
                </div>
                <div class="form-group" id="rm_cpass">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/3064/3064211.png" height="20" width="20"></span>
                            </span>
                        </div>
                        <input type="password" id="fcpass" class="form-control" name="fcpass" placeholder="Confirm Password">
                    </div>
                </div>
        </div>
        <div class="d-flex justify-content-center" id="rm_update_btn">
            <div class="modal-footer">
                <button id="forgotbtn" type="submit" class="btn btn-primary"><i class="fa fa-spinner fa-spin d-none forgot-spinner" aria-hidden="true"></i> Update</button>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>



    <!-- script tag -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
   <script src="js/login.js"></script>
  

</body>
</html>