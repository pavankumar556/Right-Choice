             <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-3 dfd">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <?php
                                       // include("../config.php");
                                       $admin = new Admin();
                                       $query = "SELECT * FROM `student`";
                                       $stmt = $admin->ret($query);
                                       $cou=0;
                                       while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                          $cou++;
                                       }
                                       echo '<p class="total_no">'.$cou.'</p>';

                                       ?>
                                    <p class="head_couter">Welcome</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-clock-o blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no" ><span id="count"></span></p>
                                    <p class="head_couter">Time</p>
                                 <script>
                                    startTime();
                                    function startTime(){
                                       var dt = new Date();
                                       var hours = dt.getHours()
                                       var minute = dt.getMinutes();
                                       var seconds=dt.getSeconds();
                                       hours = (hours % 12) || 12;
                                       document.getElementById("count").innerHTML =hours + ":" + minute+":"+seconds;
                                       // console.log("Time is - " + hours + ":" + minute+":"+seconds);
                                       setTimeout(function() {startTime()}, 1000);
                                    }
                                 </script>
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-cloud-download green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                 <?php
                                       $queryff = "SELECT * FROM `post`";
                                       $stmtff = $admin->ret($queryff);
                                       $posts=0;
                                       while($rowaf = $stmtff->fetch(PDO::FETCH_ASSOC)){
                                          $posts++;
                                       }
                                       echo '<p class="total_no">'.$posts.'</p>';

                                       ?>
                                    <!-- <p class="total_no">0</p> -->
                                    <p class="head_couter">Posts</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-comments-o red_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                 <?php
                                       $queryf = "SELECT * FROM `feedback`";
                                       $stmtf = $admin->ret($queryf);
                                       $coua=0;
                                       while($rowa = $stmtf->fetch(PDO::FETCH_ASSOC)){
                                          $coua++;
                                       }
                                       echo '<p class="total_no">'.$coua.'</p>';

                                       ?>
                                    <!-- <p class="total_no">0</p> -->
                                    <p class="head_couter">feedback</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- Second Row -->
                     
                     
                     <!-- graph -->
                     
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2022. All rights reserved.<br><br>
                           <!-- Distributed By: <a href="https://themewagon.com/">ThemeWagon</a> -->
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->