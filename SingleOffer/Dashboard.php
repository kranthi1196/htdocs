<?php
error_reporting( E_ERROR | E_WARNING | E_PARSE);
require('dashboarddb.php');


?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Single Offer Dashboard</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <meta http-equiv="refresh" content="5; url=/"> -->
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link href="https://emails.bestonlineholidays.co.uk/assets/css/admin1/bootstrap.min.css" rel="stylesheet" type="text/css" /><link href="https://emails.bestonlineholidays.co.uk/assets/css/admin1/style.css" rel="stylesheet" type="text/css" /><link href="https://emails.bestonlineholidays.co.uk/assets/css/admin1/skin-blue.min.css" rel="stylesheet" type="text/css" />		
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

        <style>
            .d-flex{display:-webkit-box!important;display:-ms-flexbox!important;display:flex!important}
            .justify-content-center{-webkit-box-pack:center!important;-ms-flex-pack:center!important;justify-content:center!important}
        </style>
    </head>
    <body class="hold-transition skin-blue sidebar-mini"> 
        <div class="wrapper">  
            <!-- Main Header -->
            <header class="main-header">		    
                <!-- Logo --> 
                <a href="./Dashboard.php" class="logo"> 
                    <!-- mini logo for sidebar mini 50x50 pixels --> 
                    <span class="logo-mini"><b>B</b>KN</span> 
                    <!-- logo for regular state and mobile devices --> 
                    <span class="logo-lg"><b>Dashboard</b></span> </a> 			    
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation"> 
                    <!-- Sidebar toggle button--> 
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span> </a> 
                    
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu " style="text-align:right;">
                        <ul class="nav navbar-nav ">
					<!-- User Account Menu -->
                            <li class="dropdown user user-menu"> 
                                <!-- Menu Toggle Button --> 
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                    <!-- The user image in the navbar--> 
                                    <img src="https://emails.bestonlineholidays.co.uk/assets/images/user.png" class="user-image" alt="User Image"> 
                                    <!-- hidden-xs hides the username on small devices so only the image appears. --> 
                                    <span class="hidden-xs">Admin </span> </a> <!-- Top Panel -->
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header"> <img src="https://emails.bestonlineholidays.co.uk/assets/images/user.png" class="img-circle" alt="User Image">
                                      <p> Admin <!-- <small>Member since Nov. 2012</small> --> </p>
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
                            <p>Admin </p> <!-- Left panel -->
                            <!-- Status --> 
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
                    </div>

                    <!-- search form (Optional) -->
                    <form action="./HB.php" method="get" class="sidebar-form">
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

                                                    <li class=""><a href="./HB.php"><i class="fa fa-table"></i> <span>HB Dashboard</span></a></li>	        
                                                        <li class=""><a href="./BOH.php"><i class="fa fa-table"></i> <span>BOH Single Offer</span></a></li>
                                                        <li class=""><a href="./SE.php"><i class="fa fa-table"></i> <span>SE Single Offer</span></a></li>
                    </ul>
                    <!-- /.sidebar-menu --> 
                </section>
                <!-- /.sidebar --> 
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">    
                  <!-- Content Header (Page header) -->

    <section class="content-header">
      <h1>Add Single offer</h1>
      <ol class="breadcrumb">
          <li><a href=""><i class="fa fa-dashboard"></i>Home</a></li>
          <!-- <li><a href="">HB Pages</a></li> -->
          <li class="active">Add Single Page Offer</li>
      </ol>
  </section>

  <section class="content" style="background:#fff; height:500px;">

      <div class="row d-flex justify-content-center"> <!--  -->  
          <div class="col-md-0" >
            <!-- BOH Panel -->
              <div class="box box-info d-flex justify-content-center" style="background:#fff; margin=0px;">
              <table>
                    <tr style="bottom-padding:20px;">
                        <th class="col-sm-4 control-label box-footer" style="width:200px; text-align:center; font-size:15px">BOH Single Offer</th>
                    </tr>
                    <tr style="width:200px;">
                        <td ><div class="box-footer d-flex justify-content-center" style="width:200px;">
                            <img src="./img/BOH_Single_Offer.png" class="user-image d-flex justify-content-center" alt="User Image" style="height:270px;width:150px;"> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="box-footer d-flex justify-content-center" style="width:200px;">
                            <a href="./BOH.php" style="color:#fff"><button class="btn btn-info pull-center " type="submit" name="add" style="">Create</button></a>
                            </div> 
                        </td>
                    </tr>
              </table>
              </div>
          </div>

          <!-- HB Panel -->
          <div class="col-md-0" style="margin:0 50px;">
              <div class="box box-info d-flex justify-content-center" style="background:#fff;">
              <table>
                    <tr style="bottom-padding:20px;">
                        <th class="col-sm-2 control-label box-footer" style="width:200px; text-align:center; font-size:15px">HB Single Offer</th>
                    </tr>
                    <tr style="width:200px;">
                        <td ><div class="box-footer d-flex justify-content-center" style="width:200px;">
                            <img src="./img/HB_Single_Offer.png" class="user-image d-flex justify-content-center" alt="User Image" style="height:270px;width:150px;"> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="box-footer d-flex justify-content-center" style="width:200px;">
                            <a href="./HB.php" style="color:#fff"><button class="btn btn-info pull-center " type="submit" name="add" style="">Create</button></a>
                            </div> 
                        </td>
                    </tr>
              </table>
              </div>
          </div>

          <!-- SE Panel -->
          <div class="col-md-0 " >
              <div class="box box-info d-flex justify-content-center" style="background:#fff;">
              <table>
                    <tr style="bottom-padding:20px;">
                        <th class="col-sm-2 control-label box-footer" style="width:200px; text-align:center; font-size:15px">SE Single Offer</th>
                    </tr>
                    <tr style="width:200px;">
                        <td ><div class="box-footer d-flex justify-content-center" style="width:200px;">
                            <img src="./img/SE_Single_Offer.png" class="user-image d-flex justify-content-center" alt="User Image" style="height:270px;width:150px;"> 
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="box-footer d-flex justify-content-center" style="width:200px;">
                            <a href="./SE.php" style="color:#fff"><button class="btn btn-info pull-center " type="submit" name="add" style="">Create</button></a>
                            </div> 
                        </td>
                    </tr>
              </table>
              </div>
          </div>
      </div> 

      
  </section>

  
  

 </div>
            <!-- /.content-wrapper --> 
<!-- ///////////////////////////////////////////////////////////////////////////////////////////// -->
            <!-- Main Footer -->
            <footer class="main-footer"> 
                <!-- To the right --> 

                <!-- Default to the left --> 
                <strong>Copyright &copy; 2024 <a href="https://www.adroit-nts.com/">Adroit Neo Tech Solutions</a>.</strong> All rights reserved. </footer>

        </div>			  
<!--         <script type="446035282eb78d46cc26cef2-text/javascript" src="https://emails.bestonlineholidays.co.uk/assets/js/jquery.min.js"></script><script type="446035282eb78d46cc26cef2-text/javascript" src="https://emails.bestonlineholidays.co.uk/assets/js/bootstrap.min.js"></script><script type="446035282eb78d46cc26cef2-text/javascript" src="https://emails.bestonlineholidays.co.uk/assets/js/admin1/app.min.js"></script><script type="446035282eb78d46cc26cef2-text/javascript" src="https://emails.bestonlineholidays.co.uk/assets/js/admin/ckeditor/ckeditor.js"></script><script type="446035282eb78d46cc26cef2-text/javascript" src="https://emails.bestonlineholidays.co.uk/assets/js/admin/ckeditor/sample.js"></script> 
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



