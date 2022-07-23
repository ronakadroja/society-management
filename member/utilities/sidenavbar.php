  <!-- top navbar -->
  <nav id="navbar" class="navbar navbar-expand navbar-dark fixed-top">
    <div class="container-fluid">
      <a class="display-sidebar me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="fa fa-align-justify text-light"></i>
      </a>
      <a class="navbar-brand fw-bold text-uppercase me-auto" href="#">SmartSociety</a>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item">
          <a class="nav-link" href="#" data-toggle="popover" title="Notifications" data-placement="bottom"><i class="fa fa-bell text-light"></i></a>
          <a id="rm-noti" class="notification d-none" href=""></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-cog text-light"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a id="profile" class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#profile-detail">Profile</a></li>
            <li><a class="dropdown-item" href="#">Setting</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>

  </nav>
  <!-- top navbar -->

  <!-- offcanvas or sidenav bar menu -->

  <div class="offcanvas offcanvas-start text-light sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <div class="row">
        <div class="col-lg-6">
          <img id="main-profile-pic" class="rounded-circle" src="https://image.flaticon.com/icons/png/128/3135/3135715.png" width="60" height="60" alt="">
        </div>
      </div>
      <div class="col-lg-4">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel"><?php echo $_SESSION['username']; ?></h5>
      </div>
      <div class="col-md-2">
        <button type="button" class="btn-close text-reset hide-close-offcanvass" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>

    </div>
    <hr class="dropdown-divider">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav">
          <li>
            <a href="memberdashboard.php" id="active" class="nav-link px-3">
              <span>
                <i class="fa fa-folder me-2"></i>
              </span>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a id="active2" href="committee-member.php" class="nav-link px-3">
              <span>
                <i class="fa fa-user me-2"></i>
              </span>
              <span>Committee Members</span>
            </a>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>


          <li>
            <a id="active3" href="event.php" class="nav-link px-3">
              <span>
                <i class="fa fa-user me-2"></i>
              </span>
              <span>Events</span>
            </a>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a href="parking.php" class="nav-link px-3">
              <span>
                <i class="fa fa-user me-2"></i>
              </span>
              <span>Parking</span>
            </a>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a href="meeting.php" class="nav-link px-3">
              <span>
                <i class="fa fa-folder me-2"></i>
              </span>
              <span>Meeting</span>
            </a>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

        </ul>
      </nav>
    </div>
  </div>
  <!-- offcanvas or sidenav bar menu -->








  <!-- modal for profile picture -->

  <div class="modal fade" id="profile-detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="exampleModalLabel">Profile - Details</h5>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">&times;</button>
        </div>
        <form id="form-5" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="container text-center mb-5">
              <img id="admin-profile" src="" width="70" height="70" alt="">
              <label for="img_file" class="bg-success rounded-circle px-1" style="cursor:pointer; position: relative;top: 27px;left: -24px;">
                <i class="fa fa-upload text-white"></i>
              </label>
              <input class="d-none" type="file" id="img_file" class="form-control" name="img_file" accept="image/*">
            </div>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <span><img src="https://image.flaticon.com/icons/png/128/1177/1177568.png" height="20" width="20"></span>
                        </span>
                      </div>
                      <input type="text" id="name" class="form-control" name="name" placeholder="Name" readonly>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <span><img src="https://image.flaticon.com/icons/png/128/732/732200.png" height="20" width="20"></span>
                        </span>
                      </div>
                      <input type="email" id="email" class="form-control" name="email" placeholder="Email Id." readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <span><img src="https://image.flaticon.com/icons/png/128/552/552489.png" height="20" width="20"></span>
                        </span>
                      </div>
                      <input type="text" id="phone" class="form-control" name="phone" placeholder="Phone No." required>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <span><img src="https://image.flaticon.com/icons/png/128/1198/1198464.png" height="20" width="20"></span>
                        </span>
                      </div>
                      <input type="text" id="address" class="form-control" name="address" placeholder="Your Address" readonly>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <span><img src="https://image.flaticon.com/icons/png/128/609/609139.png" height="20" width="20"></span>
                        </span>
                      </div>
                      <input type="text" id="occupation" class="form-control" name="occupation" placeholder="Occupation" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <span><img src="https://image.flaticon.com/icons/png/128/609/609134.png" height="20" width="20"></span>
                        </span>
                      </div>
                      <input type="text" id="occu-detail" class="form-control" name="occu-detail" placeholder="Occupation Details" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <span><img src="https://image.flaticon.com/icons/png/128/1695/1695289.png" height="20" width="20"></span>
                        </span>
                      </div>
                      <input type="text" id="identity" class="form-control" name="identity" placeholder="Identity Number" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <label for="id-photo" class="text-primary">Indentity Photo : </label>
                </div>
                <div class="col-md-8 mb-3">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="file" id="id-photo" class="form-control" name="id-photo" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <h6 class="text-danger"><span class="text-uppercase">Note : </span>we require a government-issued photo ID that shows your name and birth of date(e.g. driver's license,passport or national identification card). </h6>
              </div>
              <div class="form-group">
                <div class="input-group d-flex justify-content-center">
                  <button class="btn btn-primary" type="submit" name="submit-data" style="min-width: 200px;" id="update-profile"><i class="fa fa-spinner fa-spin d-none loading-spinner" aria-hidden="true"></i>Update</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- modal for profile picture -->





  <!-- notification message -->
  <div style="display: none;" id="all_notification">

  </div>