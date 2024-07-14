<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.php"><img style="height: 63px;" src="images/rich_logo_image01.png" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.php"><img src="images/page_icon.png" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="images/page_icon.png" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <?php echo '<h5 class="mb-0 font-weight-normal">'.$c_name.'</h5>';?>
                  <!-- <span>Gold Member</span> -->
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Manage Post</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="add_post.php">Add Post</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="">Update post</a></li> -->
                <li class="nav-item"> <a class="nav-link" href="view_post.php">View Post</a></li>
              </ul>
            </div>
          </li>
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="manage_post.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Manage Post</span>
            </a>
          </li> -->
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="create_test.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Create Test</span>
            </a>
          </li> -->
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="view_student.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">View Students</span>
            </a>
          </li> -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="test.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Test</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="view_request.php">
              <span class="menu-icon">
              <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Requets</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="view_student.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">View Students</span>
            </a>
          </li>
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
              </ul>
            </div>
          </li> -->
          <li class="nav-item menu-items">
            <a class="nav-link" href="feedback.php">
              <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
                
              </span>
              <span class="menu-title">FeedBack</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="logout.php">
              <span class="menu-icon">
              <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Log out</span>
            </a>
          </li>
        </ul>
      </nav>