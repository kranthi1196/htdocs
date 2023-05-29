    <?php require_once('Connections/dbConnect.php'); ?>
                <?php
                //initialize the session
                if (!isset($_SESSION)) {
                  session_start();
                }

                // ** Logout the current user. **
                $logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
                if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
                  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
                }

                if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
                  //to fully log out a visitor we need to clear the session varialbles
                  $_SESSION['MM_Username'] = NULL;
                  $_SESSION['MM_UserGroup'] = NULL;
                  $_SESSION['PrevUrl'] = NULL;
                  unset($_SESSION['MM_Username']);
                  unset($_SESSION['MM_UserGroup']);
                  unset($_SESSION['PrevUrl']);

                  $logoutGoTo = "index.php";
                  if ($logoutGoTo) {
                    header("Location: $logoutGoTo");
                    exit;
                  }
                }
                ?>
                <?php
                if (!isset($_SESSION)) {
                  session_start();
                }
                $MM_authorizedUsers = "";
                $MM_donotCheckaccess = "true";

                // *** Restrict Access To Page: Grant or deny access to this page
                function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
                  // For security, start by assuming the visitor is NOT authorized. 
                  $isValid = False; 

                  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
                  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
                  if (!empty($UserName)) { 
                    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
                    // Parse the strings into arrays. 
                    $arrUsers = Explode(",", $strUsers); 
                    $arrGroups = Explode(",", $strGroups); 
                    if (in_array($UserName, $arrUsers)) { 
                      $isValid = true; 
                    } 
                    // Or, you may restrict access to only certain users based on their username. 
                    if (in_array($UserGroup, $arrGroups)) { 
                      $isValid = true; 
                    } 
                    if (($strUsers == "") && true) { 
                      $isValid = true; 
                    } 
                  } 
                  return $isValid; 
                }

                $MM_restrictGoTo = "login.php";
                if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
                  $MM_qsChar = "?";
                  $MM_referrer = $_SERVER['PHP_SELF'];
                  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
                  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
                  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
                  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
                  header("Location: ". $MM_restrictGoTo); 
                  exit;
                }
                ?>
                <?php
                if (!function_exists("GetSQLValueString")) {
                function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
                {
                  if (PHP_VERSION < 6) {
                    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
                  }

                  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

                  switch ($theType) {
                    case "text":
                      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
                      break;    
                    case "long":
                    case "int":
                      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
                      break;
                    case "double":
                      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
                      break;
                    case "date":
                      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
                      break;
                    case "defined":
                      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
                      break;
                  }
                  return $theValue;
                }
                }

                $colname_rsRecord = "-1";
                if (isset($_SESSION['MM_Username'])) {
                  $colname_rsRecord = $_SESSION['MM_Username'];
                }
                mysql_select_db($database_dbConnect, $dbConnect);
                $query_rsRecord = sprintf("SELECT * FROM reg WHERE email = %s", GetSQLValueString($colname_rsRecord, "text"));
                $rsRecord = mysql_query($query_rsRecord, $dbConnect) or die(mysql_error());
                $row_rsRecord = mysql_fetch_assoc($rsRecord);
                $totalRows_rsRecord = mysql_num_rows($rsRecord);

                $colname_rsCourse = "-1";
                if (isset($_SESSION['MM_Username'])) {
                  $colname_rsCourse = $_SESSION['MM_Username'];
                }
                mysql_select_db($database_dbConnect, $dbConnect);
                $query_rsCourse = sprintf("SELECT * FROM course WHERE email = %s", GetSQLValueString($colname_rsCourse, "text"));
                $rsCourse = mysql_query($query_rsCourse, $dbConnect) or die(mysql_error());
                $row_rsCourse = mysql_fetch_assoc($rsCourse);
                $totalRows_rsCourse = mysql_num_rows($rsCourse);

                mysql_select_db($database_dbConnect, $dbConnect);
                $query_rsCourselist = "SELECT * FROM courselist";
                $rsCourselist = mysql_query($query_rsCourselist, $dbConnect) or die(mysql_error());
                $row_rsCourselist = mysql_fetch_assoc($rsCourselist);
                $totalRows_rsCourselist = mysql_num_rows($rsCourselist);
                ?>
                <!DOCTYPE html>
                <html lang="en">

                <head>

                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta name="description" content="">
                    <meta name="author" content="">

                    <title>TACTSA Seminary School</title>

                    <!-- Bootstrap Core CSS -->
                    <link href="css/bootstrap.min.css" rel="stylesheet">

                    <!-- Custom CSS -->
                    <link href="css/agency.css" rel="stylesheet">

                    <!-- Custom Fonts -->
                    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
                    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
                    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
                    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
                    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

                <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
                <link rel="stylesheet" href="css/bootstrap-image-gallery.css">
                <link rel="stylesheet" href="css/demo.css">

                    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                    <!--[if lt IE 9]>
                        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                    <![endif]-->
                <script src='https://www.google.com/recaptcha/api.js'></script>

                </head>

                <body id="page-top" class="index">

                    <!-- Navigation -->
                    <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header page-scroll">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                  <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo.png"alt="TACTSA Seminary School"/></a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                              <ul class="nav navbar-nav navbar-right">
                                    <li class="hidden">
                                        <a href="#page-top"></a>
                                    </li>
                                                      <li>
                                        <a class="page-scroll" href="index.php">School</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="home.php">My Home</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#">Results</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll" href="#">Printout</a>
                                    </li>
                                    <li>
                                        <a class="page-scroll portfolio-link" href="#">Study Materials</a>
                                    </li>
                                    <li>
                                      <a href="<?php echo $logoutAction ?>" class="page-scroll portfolio-link" >Logout</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- /.navbar-collapse -->
                        </div>
                        <!-- /.container-fluid -->
                    </nav>

                    <!-- Header -->

                    <!--End Header -->
                 <!-- Registration Section -->
                    <section class="headtext">
                        <div class="container">

                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h2 class="section-heading">STUDENT PORTAL</h2>
                                </div>
                            </div>
                            </div>
                        </section>

                    <section id="registration">
                        <div class="container">

                        <!-- Form Submission Alert -->


                          <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h2 class="section-heading">User Profile</h2>
                                </div>
                            </div>

                                <!-- Start Registration Form -->
                                 <div id="reg" class="col-sm-12">
                                 <div class="page-header">  
                <strong>Name:</strong>
                <div class="well well-sm">
                  <p><?php echo ucwords($row_rsRecord['fname']." ".$rsRecord['lname']); ?></p>
                  <p><strong>Gender:</strong> <?php echo $row_rsRecord['gender']; ?></p>
                </div>
                <strong>CONTACTS:</strong>
                <div class="well well-sm"> 
                  <p><?php echo $row_rsRecord['mobile']; ?> | <?php if(empty($row_rsRecord['email'])){echo 'N/A';}else{echo $row_rsRecord['email'];}  ?>
                  </p>
                  <p><?php echo $row_rsRecord['address']; ?></p>
                  <p><strong>State of Origin:</strong> <?php echo $row_rsRecord['state']; ?></p>
                  <p><strong>Nationality: </strong><?php echo $row_rsRecord['nationality']; ?></p>
                </div>  
                </div>
                <strong>REGISTERED COURSES</strong>
                <div class="well well-sm"> 
                                <?php
                                $cou = explode(',' , $row_rsCourse['courses']);
                                foreach($cou as $mark){
                                    $mark1 = $mark."<br>";
                                        }

                                    if ($mark1 = $row_rsCourselist['code'] ){echo $row_rsCourselist['name'];}else {echo "Failed";}
                                ?>

                </div>  
                </div>

                          </div>
                  <!-- End Registration Form -->
                            </div>
                    </section>


                    <footer>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <span class="copyright">Copyright &copy; Tactsa 2016</span>
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-inline social-buttons">
                                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="list-inline quicklinks">
                                        <li><a class="page-scroll portfolio-link" href="#privacy" data-toggle="modal">Privacy Policy</a>
                                        </li>
                                        <li><a class="page-scroll portfolio-link" href="#terms" data-toggle="modal">Terms and Conditions</a>
                                        </li>  <li><a class="page-scroll portfolio-link" href="#faq" data-toggle="modal">FAQs</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>


                <!-- Terms and Conditions -->
                    <div class="portfolio-modal modal fade" id="terms" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal">
                                <div class="lr">
                                    <div class="rl">
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="modal-body">
                                        <div class="page-header">
                  <h1>Coming Soon</h1>
                </div>

                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Return</button>
                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- FAQ -->
                    <div class="portfolio-modal modal fade" id="faq" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal">
                                <div class="lr">
                                    <div class="rl">
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="modal-body">
                                        <div class="page-header">
                  <h1>Coming Soon</h1>
                </div>

                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Return</button>
                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- Privacy -->
                    <div class="portfolio-modal modal fade" id="privacy" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-content">
                            <div class="close-modal" data-dismiss="modal">
                                <div class="lr">
                                    <div class="rl">
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="modal-body">
                                        <div class="page-header">
                  <h1>Coming Soon</h1>
                </div>

                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Return</button>
                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- jQuery -->
                    <script src="js/jquery.js"></script>

                    <!-- Bootstrap Core JavaScript -->
                    <script src="js/bootstrap.min.js"></script>

                    <!-- Plugin JavaScript -->
                    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
                    <script src="js/classie.js"></script>
                    <script src="js/cbpAnimatedHeader.js"></script>

                    <!-- Contact Form JavaScript -->
                    <script src="js/jqBootstrapValidation.js"></script>
                    <script src="js/contact_me.js"></script>

                    <!-- Custom Theme JavaScript -->
                    <script src="js/agency.js"></script>
                    <!-- Bootstrap JS is not required, but included for the responsive demo navigation and button states -->

                <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>


                </body>

                </html>
                <?php
                mysql_free_result($rsRecord);

                mysql_free_result($rsCourse);

                mysql_free_result($rsCourselist);
                ?>