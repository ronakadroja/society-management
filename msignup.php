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
    <title>SmartSociety-MemberSignup</title>
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
            <!-------------------- Member Form ------------------------>
            <form id="form2">
                <h2>Member</h2>
                <hr>
                <div id="alert1"></div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/609/609803.png" height="20" width="20"></span>
                            </span>
                        </div>
                        <input type="text" id="sid" class="form-control" name="sid" placeholder="Society Id" required>
                    </div>
                </div>

                <div class="form-group d-none" id="username">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/1177/1177568.png" height="20" width="20"></span>
                            </span>
                        </div>
                        <input id="muser" type="text" class="form-control" name="muser" placeholder="Username" required>
                    </div>
                </div>
                <div class="form-group d-none" id="name">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/3942/3942147.png" height="20" width="20"></span>
                            </span>
                        </div>
                        <input id="mname" type="text" class="form-control" name="mname" placeholder="Full Name" required>
                    </div>
                </div>
                <div class="form-group d-none" id="email">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/732/732200.png" height="22" width="22"></span>
                            </span>
                        </div>
                        <input id="memail" type="email" class="form-control" name="memail" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="form-group d-none" id="phone">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/552/552489.png" height="17" width="17"></span>
                            </span>
                        </div>
                        <input id="mphone" type="text" class="form-control" name="mphone" placeholder="Phone Number" required>
                    </div>
                </div>
                <div class="form-group d-none" id="address">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/3595/3595587.png" height="20" width="20"></span>
                            </span>
                        </div>
                        <input id="maddress" type="text" class="form-control" name="maddress" placeholder="Address" required>
                    </div>
                </div>
                <div class="form-group d-none" id="dob">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/448/448003.png" height="20" width="20"></span>
                            </span>
                        </div>
                        <input id="mbdate" type="date" class="form-control" name="mbdate" placeholder="Birth Date" required>
                    </div>
                </div>
                <div class="form-group d-none" id="flat_type">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label for="stype" style="font-size: 17px; font-weight: bold; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Flat Type : <br></label>
                        </div>
                        <br>
                        <select name="mflat_type" id="mflat_type" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; border-radius: 5px; margin-left:10px; outline:none; border:1px solid #e1e1e1; width:67%; padding:3px">
                            <option value="Select Type" disabled>Select</option>
    
                        </select>

                    </div>
                </div>
                <div class="form-group d-none" id="house_no">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <span><img src="https://image.flaticon.com/icons/png/128/4293/4293053.png" height="20" width="20"></span>
                            </span>
                        </div>
                        <input id="mhouseno" type="text" class="form-control" name="mhouseno" placeholder="House No." required>
                    </div>
                </div>
                <div class="form-group d-none" style="padding:10px 0px 0px 5px; margin: 0px 0px 10px 0px" id="isOwner">
                    <div class="input-group">
                        <p style="font-size: 17px; margin-top:2px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight:bold;">Is Owner? :</p>
                        <input type="radio" value="Yes" name="is_owner" style="margin: 9px;">
                        <label for="Yes" style="color: green; margin: 5px 10px 0px 0px;">Yes</label>
                        <input type="radio" value="No" name="is_owner" style="margin: 9px;">
                        <label for="No" style="color: red; margin: 5px 0px 0px 0px;">No</label>
                    </div>
                </div>
                <div class="form-group d-none" id="password">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i><img src="https://image.flaticon.com/icons/png/128/3039/3039427.png" height="17" width="17"></i>
                            </span>
                        </div>
                        <input id="mpass" type="password" class="form-control" name="mpass" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group d-none" id="cpassword">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i><img src="https://image.flaticon.com/icons/png/128/4685/4685238.png" height="20" width="22"></i>
                            </span>
                        </div>
                        <input type="password" id="mcpass" class="form-control" name="mcpass" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="form-group d-none" id="buttons">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <a href="signup.php" class="butn">
                                Back
                            </a>
                        </div>
                        <button id="msubmit" type="submit" class="btn btn-primary btn-lg b1" style="min-width: 100px; margin-left: 18%;"><i class="fa fa-spinner fa-spin d-none loading-spinner" aria-hidden="true"></i> Sign Up</button>
                    </div>
                </div>
            </form>
            <div id="response">

            </div>
            <div class="form-group">
                <div class="input-group d-flex justify-content-center">
                    <button class="btn btn-primary btn-lg" style="min-width: 100px;" id="next-button">Next</button>
                </div>
            </div>
        </div>
    </div>


    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="js/msignup.js"></script>

</body>

</html>