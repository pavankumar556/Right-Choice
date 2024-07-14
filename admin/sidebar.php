
 <!-- Sidebar  -->
 <nav id="sidebar">
    <div class="sidebar_blog_1">
       <div class="sidebar-header">
          <div class="logo_section">
             <a href="index.php"><img class="logo_icon img-responsive" src="images/page_icon.png" alt="#" /></a>
          </div>
       </div>
       <div class="sidebar_user_info">
          <div class="icon_setting"></div>
          <div class="user_profle_side">
             <div class="user_img"><img class="img-responsive" src="images/layout_img/logo90.png" alt="#" /></div>
             <div class="user_info">
               <?php
                     $adid=$_SESSION['ad_id'];
                     $admin = new Admin();
                     $query = "SELECT * FROM `admin` where `ad_id`='$adid'";
                     $stmt = $admin->ret($query);
                     $a=1;
                     while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo'<h6>'.$row['ad_name'].'</h6>';
                     }


               ?>
                
                <p><span class="online_animation"></span> Online</p>
             </div>
          </div>
       </div>
    </div>
    <div class="sidebar_blog_2">
       <h4>General</h4>
       <ul class="list-unstyled components">
          <li class="active">
             <!-- <a href="index.php?dash=dashboard" data-toggle="collapse" aria-expanded="false" class=""><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
             <ul class="collapse list-unstyled" id="dashboard">
                <li>
                   <a href="index.php?dash=dashboard"> <span>Dashboard</span></a>
                </li>
                <li>
                   <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                </li>
             </ul> -->
          </li>
          <li><a href="index.php"><i  class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
          <li><a href="student.php"><i class="fa fa-clock-o orange_color"></i> <span>Student</span></a></li>
          <li>
             <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-table purple_color2"></i> <span>Centre</span></a>
             <ul class="collapse list-unstyled" id="apps">
                <li><a href="centre_request.php">> <span>View Request</span></a></li>
                <li><a href="centre.php">> <span>View Centre</span></a></li>
                <li><a href="manage_post.php">> <span>Manage Post</span></a></li>
             </ul>
          </li>
          <!-- <li><a href="centre.php"><i class="fa fa-diamond purple_color"></i> <span>centre</span></a></li> -->
          <!-- <li>
             <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>Elements</span></a>
             <ul class="collapse list-unstyled" id="element">
                <li><a href="general_elements.html">> <span>General Elements</span></a></li>
                <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                <li><a href="icons.html">> <span>Icons</span></a></li>
                <li><a href="invoice.html">> <span>Invoice</span></a></li>
             </ul>
          </li> -->
          <!-- <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Tables</span></a></li>
          <li>
             <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
             <ul class="collapse list-unstyled" id="apps">
                <li><a href="email.html">> <span>Email</span></a></li>
                <li><a href="calendar.html">> <span>Calendar</span></a></li>
                <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
             </ul>
          </li>
          <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li>
          <li>
             <a href="contact.html">
             <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
          </li>
          <li class="active">
             <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Additional Pages</span></a>
             <ul class="collapse list-unstyled" id="additional_page">
                <li>
                   <a href="profile.html">> <span>Profile</span></a>
                </li>
                <li>
                   <a href="project.html">> <span>Projects</span></a>
                </li>
                <li>
                   <a href="login.html">> <span>Login</span></a>
                </li>
                <li>
                   <a href="404_error.html">> <span>404 Error</span></a>
                </li>
             </ul>
          </li>
          <li><a href="map.html"><i class="fa fa-map purple_color2"></i> <span>Map</span></a></li>
          <li><a href="charts.html"><i class="fa fa-bar-chart-o green_color"></i> <span>Charts</span></a></li> -->
          <!-- <li>
             <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Jobs</span></a>
             <ul class="collapse list-unstyled" id="apps">
                </ul>
               </li> -->
               <li class="active">
                  <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Jobs</span></a>
                  <ul class="collapse list-unstyled" id="additional_page">
                     <li><a href="add_jobs.php">> <span>Add Jobs</span></a></li>
                     <li><a href="job_view.php">> <span>View Jobs</span></a></li>
                   </ul>
          </li>
          <!-- <li><a href="manage_post.php"><i class="fa fa-table purple_color2"></i> <span>Manage Post</span></a></li> -->
          
          <!-- <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Test</span></a></li> -->
          <!-- <li>
             <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Aptitude Test</span></a>
             <ul class="collapse list-unstyled" >
                
             </ul>
          </li>  -->
          <li>
             <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-map purple_color2"></i> <span>Manage Test</span></a>
             <ul class="collapse list-unstyled" id="element">
             <li><a href="add_test.php">> <span>Add Qutions</span></a></li>
                <li><a href="viewtest.php">> <span>View Test</span></a></li>
             </ul>
          </li>
          
          <li><a href="report.php"><i class="fa fa-bar-chart-o green_color"></i> <span>Report</span></a></li>
          <li><a href="feedback.php"><i class="fa fa-briefcase blue1_color"></i> <span>FeedBack</span></a></li>
          <li><a href="logout.php"><i class="fa fa-user "></i> <span>Log out</span></a></li>
       </ul>

    </div>
 </nav>
 <!-- end sidebar -->