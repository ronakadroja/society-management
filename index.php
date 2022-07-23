<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./images/smartsociety.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  
  <title>SmartSociety</title>

</head>

<body>

  <header>
    <video src="video/apartment.mp4" autoplay loop muted class="vid"></video>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <img class="mx-3" style="width: 60px;height:60px;" src="images/logo.png" alt="Company logo">
        <a class="navbar-brand" href="index.php">
          <h1 class="text-info mx-3">SmartSociety</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse my-4 " id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="float:right">
            <li class="nav-item bg-secondary rounded">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contactus">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#aboutus">About Us</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>

    <div class="banner-txt">
      <h1>Welcome to SmartSociety</h1>
      <p>Easy to manage your Society</p>
            <a id="jjj" class="btn btn-danger text-white text-decoration-none" href="signup.php">Sign up</a>
            <a id="rrr" class="btn btn-success text-white text-decoration-none" href="login.php">Login</a>
    </div>
  </header>


  <!-- ///////////////////////////////// video //////////////////////////////////////////////////-->




  <!-- //////////////////////////// ABOUT US /////////////////////////// -->
  
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-4" data-aos="fade-right">
        <div class="card mx-auto bg-dark" style="width: 18rem;">
          <img class="card-img-top" src="images/society-1.jpg" style="height:150px;" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mx-3" data-aos="fade-left">
        <div class="card mx-auto bg-dark" style="width: 18rem;">
          <img class="card-img-top" src="images/society-2.jpg" style="height: 150px;" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in">
        <div class="card mx-auto bg-dark" style="width: 18rem;">
          <img class="card-img-top" src="images/society-3.jpg" style="height: 150px;" alt="Card image cap">
          <div class="card-body">
            <p class="card-text text-light">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div id="aboutus" class="container aboutUs">

    <section>
      <h2>About Us</h2>

      <p>Smart Society offers you hassle-free, reliable, efficient and convenient platform for housing society
        management. It is a highly functional tool to get organized and manage your society.

        We have come up with easy approach for maintaining bills, organising societal events, scheduling
        meetings, notices and sharing timely information with ease. It also provides visitor information,
        complaint system and details about the upcoming events.<br><br>

        The website efficiently maintains the residents and workers information, parking system, cctv, rules and
        regulations of society, society funds and much more.

        It brings great amount of transparency, centralized, efficient way of managing the activities for the
        society & provides easy to use interface to manage finances, keep track of assets/maintain them, manage
        committees, meetings, notices and share information in a systematic way</p>
    </section>
  </div> 

  <!--////////////////////////// contact us//////////////////////////////  -->


  <div id="contactus" class="bg-light">
    <div class="container">
      <div class="row justify justify-content-center">
        <div class="col-11 col-md-8 col-lg-6 col-xl-5">
          <form action="contact.php" method="post">
            <div class="card bg-dark">
              <div id="feed"></div>
              <div class="row mt-0">
                <div class="col-md-12 ">
                  <h4 class="mb-1 text-center text-info" style="font-size: 40px;">Contact Us</h4>
                  <p class="mb-1">Use the form below to share your questions, ideas, comments and feedback</p>
                </div>
              </div>
              <div class="form-group row mb-3">
                <div class="col-md-12 mb-0">
                  <p class="mb-1">Email :</p> <input id="e-mail" type="text" placeholder="Enter your email" name="email" class="form-control input-box rm-border" required>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12 mb-2">
                  <p class="mb-1">Message :</p> <textarea id="message" type="text" placeholder="Enter your message" name="msg" class="form-control input-box rm-border" required></textarea>
                </div>
              </div>
              <div class="form-group row justify-content-center mb-0">
                <div class="col-md-12 px-3"> <button id="pppp" name="submit" class="btn btn-primary rm-border" onclick="feed()">Submit</button> </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  
  <script>
    AOS.init({
      offset: 300,
      duration: 1000,
    });
  </script>
  <script>
    function feed() {
      var a = document.getElementById("e-mail");
      var b = document.getElementById("message");
      if (a.value != "" && b.value != "") {
        document.getElementById("feed").style.borderRadius="6px";
        document.getElementById("feed").style.backgroundColor = "green";
        document.getElementById("feed").innerHTML = "Thank You For Your Feedback.";
        document.getElementById("feed").style.fontSize = "30px";
        document.getElementById("feed").style.textAlign = "center";
        document.getElementById("feed").style.color = "white";
        

      } else {
        document.getElementById("feed").style.borderRadius="6px";
        document.getElementById("feed").style.backgroundColor = "red";
        document.getElementById("feed").innerHTML = "Sorry! Your feedback is not posted.";
        document.getElementById("feed").style.fontSize = "30px";
        document.getElementById("feed").style.textAlign = "center";
        document.getElementById("feed").style.color = "white";
        
        
      }

    }

   
  </script>



</body>

</html>