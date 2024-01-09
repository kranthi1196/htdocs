<?php
error_reporting( E_ERROR | E_WARNING | E_PARSE);
require('dashboarddb.php');
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Add SE Single Offer</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="https://emails.bestonlineholidays.co.uk/assets/css/admin1/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="https://emails.bestonlineholidays.co.uk/assets/css/admin1/style.css" rel="stylesheet" type="text/css" /><link href="https://emails.bestonlineholidays.co.uk/assets/css/admin1/skin-blue.min.css" rel="stylesheet" type="text/css" />		
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    </head>
    <body class="hold-transition skin-blue sidebar-mini"> 
        <div class="wrapper">  
            <!-- Main Header -->
            <header class="main-header">		    
                <!-- Logo --> 
                <a href="https://emails.bestonlineholidays.co.uk/admin/index" class="logo"> 
                    <!-- mini logo for sidebar mini 50x50 pixels --> 
                    <span class="logo-mini"><b>B</b>KN</span> 
                    <!-- logo for regular state and mobile devices --> 
                    <span class="logo-lg"><b>SE Single Offer</b></span> </a> 			    
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation"> 
                    <!-- Sidebar toggle button--> 
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a> 
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
					<!-- User Account Menu -->
                            <li class="dropdown user user-menu"> 
                                <!-- Menu Toggle Button --> 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                    <!-- The user image in the navbar--> 
                                    <img src="https://emails.bestonlineholidays.co.uk/assets/images/user.png" class="user-image" alt="User Image"> 
                                    <!-- hidden-xs hides the username on small devices so only the image appears. --> 
                                    <span class="hidden-xs"> Admin </span> </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header"> <img src="https://emails.bestonlineholidays.co.uk/assets/images/user.png" class="img-circle" alt="User Image">
                                      <p>  Admin  <!-- <small>Member since Nov. 2012</small> --> </p>
                                    </li>
                                
                                    <li class="user-footer">
                                        <div class="pull-left"> <a href="https://emails.bestonlineholidays.co.uk/admin/profile" class="btn btn-default btn-flat">Profile</a> </div>
                                        <div class="pull-right"> <a href="https://emails.bestonlineholidays.co.uk/admin/logout" class="btn btn-default btn-flat">Sign out</a> </div>
                                    </li>
                                </ul>
                            </li>
                    <!-- Control Sidebar Toggle Button -->

                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar"> 

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar"> 

                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image"> <img src="https://emails.bestonlineholidays.co.uk/assets/images/user.png" class="img-circle" alt="User Image"> </div>
                        <div class="pull-left info">
                            <p> Admin </p>
                            <!-- Status --> 
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
                    </div>

                    <!-- search form (Optional) -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span> </div>
                    </form>
                    <!-- /.search form --> 

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <!-- Optionally, you can add icons to the links -->

                                                    <li class=""><a href="./SE.php"><i class="fa fa-table"></i> <span>SE Dashboard</span></a></li>	        
                                                        <li class=""><a href="./BOH.php"><i class="fa fa-table"></i> <span>BOH Single Offer</span></a></li>
                                                        <li class=""><a href="./HB.php"><i class="fa fa-table"></i> <span>HB Single Offer</span></a></li>
                                                                                	

                    </ul>
                    <!-- /.sidebar-menu --> 
                </section>
                <!-- /.sidebar --> 
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">    
                  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Add Superescapes offer</h1>
      <ol class="breadcrumb">
          <li><a href=""><i class="fa fa-dashboard"></i>Home</a></li>
          <li><a href="">SE Pages</a></li>
          <li class="active">Add Single Page Offer</li>
      </ol>
  </section>
  <section class="content" style="background:#fff;">
      <div class="row">           
          <!-- right column -->
          <div class="col-md-10 ">
              <!-- Horizontal Form -->
              <div class="box box-info ">
                  <!-- /.box-header -->
                  <!-- form start -->
                  <form action="SESingleOffer.php" name="add_static_page" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                  <div class="box-body">
                      
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Subject Line *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="subjectLine" placeholder="City Break of the Week - Book Now ! from just £109pp" value="" required>
                                                      </div>									
                    </div>
                        
                                            <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Offer Page Url *</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="pageUrl" placeholder="https://emails.bestonlineholidays.co.uk/holidays/harding_hotel/dublin_ireland/13547?src=email" value="" required>
                                                        </div>									
                      </div>

                      <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">File Name *</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="fileName" placeholder="Dublin06012024" value="" required>
                          </div>									
                      </div>
                                           <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Offer Image Name </label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="imageUrl" placeholder="https://email.bestonlineholidays.co.uk/sendout/img/Dublin06012024.jpg" value="" required>
                                                        </div>									
                      </div>
                        

                       <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Deal Title</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="dealTitle" placeholder="Deal Title"required value="">
                                                        </div>									
                      </div> 

                       <!-- <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" name="emailText" placeholder="customer.support@holidaybuzz.co.uk" value="" required>
                                                        </div>									
                      </div>  -->
                      <!--  -->

                       <div class="form-group">
                          <label for="focusedinput" class="col-sm-2 control-label">Offer Send Date</label>
                          <div class="col-sm-10">
                              <input type="date" class="form-control" name="senddate" placeholder="senddate" value="" required>
                                                        </div>									
                      </div>
                  </div><!-- /.box-body -->						 		
                  <div class="box-footer">
                      <a class="btn btn-default" href="./Dashboard.php" type="reset">Cancel</a>
                      <button class="btn btn-info pull-right" type="submit" name="se_add">ADD</button>
                  </div>    					

                  </form>	
              </div><!-- /.box -->             
          </div><!--/.col (right) -->
      </div>   <!-- /.row -->
  </section><!-- /.content -->
  

                <!-- /.content --> 
            </div>
            <!-- /.content-wrapper --> 

            <!-- Main Footer -->
            <footer class="main-footer"> 
                <!-- To the right --> 

                <!-- Default to the left --> 
                <strong>Copyright &copy; 2024 <a href="#">Superescapes</a>.</strong> All rights reserved. </footer>

        </div>			  
        <!-- <script type="446035282eb78d46cc26cef2-text/javascript" src="https://emails.bestonlineholidays.co.uk/assets/js/jquery.min.js"></script><script type="446035282eb78d46cc26cef2-text/javascript" src="https://emails.bestonlineholidays.co.uk/assets/js/bootstrap.min.js"></script><script type="446035282eb78d46cc26cef2-text/javascript" src="https://emails.bestonlineholidays.co.uk/assets/js/admin1/app.min.js"></script><script type="446035282eb78d46cc26cef2-text/javascript" src="https://emails.bestonlineholidays.co.uk/assets/js/admin/ckeditor/ckeditor.js"></script><script type="446035282eb78d46cc26cef2-text/javascript" src="https://emails.bestonlineholidays.co.uk/assets/js/admin/ckeditor/sample.js"></script> 
        <script type="446035282eb78d46cc26cef2-text/javascript">
            function isNumber(event) {
                var charCode = (event.which) ? event.which : event.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                return true;
            }
            $(function () {
                if ($(".table").length)
                    $(".table").not("#example").DataTable({
                        "scrollX": true,
                    });
            });

            function blockCustomTabs(e) {
                $.blockUI.defaults.css = {};
                $(e).block({
                    message: '<div><img src="/images/loader-bar.gif" alt=""  width="225px"/></div>',
                    overlayCSS: {backgroundColor: '#fff'}
                });
            }
            function unblockCustomTabs(e) {
                $(e).unblock();
            }



        </script>
        <script type="446035282eb78d46cc26cef2-text/javascript">
            $(function () {
        $('.js-example-basic-single').select2();      
            })

        </script>
    <script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="446035282eb78d46cc26cef2-|49" defer></script> --></body>
</html>



