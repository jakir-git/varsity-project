     <aside id="slide-out" class="side-nav white fixed">
                <div class="side-nav-wrapper">
                    <div class="sidebar-profile">
                        <div class="sidebar-profile-image">
                            <img src="../assets/images/profile-image.png" class="circle" alt="">
                        </div>
                        <div class="sidebar-profile-info">
                       
                                <p>Admin</p>

                         
                        </div>
                    </div>
            
                <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
                    <li class="no-padding"><a class="waves-effect waves-grey" href="dashboard.php"><i class="fa fa-cog"></i>Dashboard</a></li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="fa fa-desktop"></i>Department<i class="fa fa-angle-right"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="adddepartment.php">Add Department</a></li>
                                <li><a href="managedepartments.php">Manage Department</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="fa fa-calendar"></i>Leave Type<i class="fa fa-angle-right"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="addleavetype.php">Add Leave Type</a></li>
                                <li><a href="manageleavetype.php">Manage Leave Type</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="fa fa-user"></i>Employees<i class="fa fa-angle-right"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="addemployee.php">Add Employee</a></li>
                                <li><a href="manageemployee.php">Manage Employee</a></li>
       
                            </ul>
                        </div>
                    </li>

   <li class="no-padding">
                        <a class="collapsible-header waves-effect waves-grey"><i class="fa fa-edit"></i>Leave Management<i class="fa fa-angle-right"></i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="leaves.php">All Leaves </a></li>
                                <li><a href="pending-leavehistory.php">Pending Leaves </a></li>
                                <li><a href="approvedleave-history.php">Approved Leaves</a></li>
                                  <li><a href="notapproved-leaves.php">Not Approved Leaves</a></li>
       
                            </ul>
                        </div>
                    </li>


  <li class="no-padding"><a class="waves-effect waves-grey" href="changepassword.php"><i class="fa fa-lock"></i>Chnage Password</a></li>

                        <li class="no-padding">
                                <a class="waves-effect waves-grey" href="logout.php"><i class="fa fa-power-off"></i>Sign Out</a>
                            </li>  
                 

                 
              
                </ul>
                   <div class="footer">
                    <p class="copyright"><a href="#">ELMS </a>© 2020</p>
                
                </div>
                </div>
            </aside>
            <style>
                #slide-out ul li .fa-angle-right{
                    float: right !important;
                }
                #slide-out ul li .fa{
                    margin-right: 5px !important;
                    line-height: 1;
                }
            </style>