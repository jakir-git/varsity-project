<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['emplogin'])==0)
    {   
header('location:index.php');
}
else{

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Employee | Leave History</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">
        <link href="assets/plugins/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

            
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
       <?php include('includes/header.php');?>
            
       <?php include('includes/sidebar.php');?>
            <main class="mn-inner">
                <div class="row">
                    <div class="col s12">
                        <div class="page-title">
                            <h4> Leave Status </h4>
                        </div>
                    </div>
                   
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <!-- <span class="card-title">Leave Status</span> -->
                                <?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong> : <?php echo htmlentities($msg); ?> </div><?php }?>
                                
                                <div class="leave-status-tab">
                                   <ul class="leave-tab-menu">
                                      <li><button class="active" data-tab-toggle="tab-1">Total Leave</button></li>
                                      <li><button class="" data-tab-toggle="tab-2">Sick Leave</button></li>
                                      <li><button class="" data-tab-toggle="tab-3">Casual Leave</button></li>
                                   </ul>
                                   <div class="row" data-tab-content="tab-1">
                                      <div class="leave-status">
                                         <h4>Total Leave Count:</h4>
                                         <h5>Sick Leave: 10</h5>
                                         <h5>Casual Leave: 12</h5>
                                      </div>
                                   </div>
                                   <div class="row" data-tab-content="tab-2" style="display: none">
                                      <div class="leave-status">
                                         <h4>Leave 2</h4>
                                      </div>
                                   </div>
                                   <div class="row" data-tab-content="tab-3" style="display: none">
                                      <div class="leave-status">
                                         <h4>Leave 3</h4>
                                      </div>
                                   </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </main>
         
        </div>
        <div class="left-sidebar-hover"></div>
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/custom.js"></script>
        
    </body>
</html>
<?php } ?>