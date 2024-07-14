 <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.php">
                              <h1 style="color: white; font-size: 40px;"> &nbsp; Admin</h1></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <!-- <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul> -->
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/logo90.png" alt="#" />
                                    <?php
                     $adid=$_SESSION['ad_id'];
                     $admin = new Admin();
                     $query = "SELECT * FROM `admin` where `ad_id`='$adid'";
                     $stmt = $admin->ret($query);
                     $a=1;
                     while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                        echo'<span class="name_user">'.$row['ad_name'].'</span></a>';
                     }


               ?>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.php">My Profile</a>
                                       <!-- <a class="dropdown-item" href="settings.php">Settings</a> -->
                                       <!-- <a class="dropdown-item" href="help.html">Help</a> -->
                                       <a class="dropdown-item" href="logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->