<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/smartsociety.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" href="css/signup.css">
    <title>SmartSociety-AdminSignup</title>
    <style>
        .multipleSelection {
            width: 300px;
        }

        .selectBox {
            position: relative;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .selectBox select {
            width: 100%;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
            border: 1px solid #e1e1e1;
            height: 4vh;
            font-size: 16px;
        }

        .overSelect {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
        }

        #checkBoxes {
            display: none;
            border: 1px solid #e1e1e1;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            padding-left: 10px;
        }

        #checkBoxes label {
            display: block;
        }

        .select-option {
            padding: 2px;
            cursor: pointer;
        }

        input[type="checkbox"] {
            width: 15px;
            height: 15px;
            margin-right: 5px;
        }
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
            <!-------------------- Admin Form ------------------------>
            <form id="form1">
                <h2>Admin</h2>
                <hr>
                <!------------------Society Registration----------------------->
                <div id="Page1">

                    <h6>Society Registration</h6>
                    <br>
                    <div id="alert1">

                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/691/691242.png" height="20" width="20"></span>
                                </span>
                            </div>
                            <input type="text" name="sr_name" id="sr_name" class="form-control" placeholder="Society Name" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/3595/3595587.png" height="20" width="20"></span>
                                </span>
                            </div>
                            <input type="text" name="sr_add" id="sr_add" class="form-control" placeholder="Society Address" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/3175/3175163.png" height="20" width="20"></span>
                                </span>
                            </div>
                            <input type="text" name="sr_city" id="sr_city" class="form-control" placeholder="City" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/2933/2933187.png" height="20" width="20"></span>
                                </span>
                            </div>
                            <input type="text" name="sr_state" id="sr_state" class="form-control" placeholder="State" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/3069/3069619.png" height="20" width="20"></span>
                                </span>
                            </div>
                            <input type="text" name="sr_pin" id="sr_pin" class="form-control" placeholder="Pin Code" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/1810/1810954.png" height="20" width="20"></span>
                                </span>
                            </div>
                            <input type="text" name="sr_country" id="sr_country" class="form-control" placeholder="Country" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <a href="signup.php" class="butn">
                                    Back
                                </a>
                            </div>
                            <button class="btn btn-primary btn-lg b1" style="min-width: 100px; margin-left: 28%;" onclick="sd()">Next</button>
                        </div>
                    </div>
                </div>

                <div id="Page2">
                    <!------------------Society Details----------------------->
                    <h6>Society Details</h6>

                    <br>
                    <div id="alert2">

                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label for="stype" style="font-size: 17px; font-weight: bold; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Society Type : <br></label>
                            </div>
                            <br>
                            <select name="society_type" id="selection" onclick="select(take())" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; border-radius: 5px; margin-left:10px; outline:none; border:1px solid #e1e1e1; width:50%; padding:3px">
                                <option value="Select Type">Select</option>
                                <option value="Building">Appartment/Flats</option>
                                <option value="Row House">Raw House/Tenament</option>
                            </select>
                            <input type="hidden" id="hidden" disabled>
                        </div>
                    </div>
                    <div id="Building">

                    </div>
                    <div id="Row">

                    </div>
                </div>

                <div id="Page3">
                    <!-- ----------------Admin Details--------------------- -->
                    <h6>Admin Details</h6>
                    <br>
                    <div id="alert3">
                        
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/3135/3135715.png" height="20" width="20"></span>
                                </span>
                            </div>
                            <input id="auser" type="text" class="form-control" name="auser" placeholder="User Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/598/598623.png" height="20" width="20"></span>
                                </span>
                            </div>
                            <input id="aname" type="text" class="form-control" name="aname" placeholder="Full Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/732/732200.png" height="22" width="22"></span>
                                </span>
                            </div>
                            <input id="aemail" type="email" class="form-control" name="aemail" placeholder="Email Address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/552/552489.png" height="17" width="17"></span>
                                </span>
                            </div>
                            <input id="aphone" type="text" class="form-control" name="aphone" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/1198/1198464.png" height="20" width="20"></span>
                                </span>
                            </div>
                            <input id="aaddress" type="text" class="form-control" name="aaddress" placeholder="Address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <span><img src="https://image.flaticon.com/icons/png/128/3159/3159408.png" height="20" width="20"></span>
                                </span>
                            </div>
                            <input id="abdate" type="date" class="form-control" name="abdate" placeholder="Birth Date" required>
                        </div>
                    </div>
                    <div id="ifBuilding">

                    </div>
                    <div id="ifRowHouse">

                    </div>
                    
                    <div class="form-group" style="padding:10px 0px 0px 5px; margin: 0px 0px 10px 0px">
                        <div class="input-group">
                            <p style="font-size: 17px; margin-top:2px; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight:bold;">Is Owner? :</p>
                            <input type="radio" value="Yes" name="is_owner" style="margin: 9px;" required>
                            <label for="Yes" style="color: green; margin: 5px 10px 0px 0px;">Yes</label>
                            <input type="radio" value="No" name="is_owner" style="margin: 9px;" required>
                            <label for="No" style="color: red; margin: 5px 0px 0px 0px;">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i><img src="https://image.flaticon.com/icons/png/128/673/673069.png" height="17" width="17"></i>
                                </span>
                            </div>
                            <input id="apass" type="password" class="form-control" name="apass" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i><img src="https://image.flaticon.com/icons/png/128/4685/4685238.png" height="20" width="22"></i>
                                </span>
                            </div>
                            <input id="acpass" type="password" class="form-control" name="acpass" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <a onclick="gopage2()" class="butn">
                                    Back
                                </a>
                            </div>
                            <button id="submitdata" type="submit" class="btn btn-primary btn-lg b1" style="min-width: 100px; margin-left: 18%;"><i class="fa fa-spinner fa-spin d-none loading-spinner" aria-hidden="true"></i> Sign up</button>
                        </div>
                    </div>
                    
                <div>
            </form>
        </div>
    </div>


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="js/asignup.js"></script>
    

</body>


</html>