<?php
include('db.php');
//include('admin_valid.php');

$admin = "admin_info";
$admin_ret = "SELECT * FROM `$admin` WHERE adminemail='$adminemail' AND adminpassword = '$adminpassword_dec'";
$ret_data = mysqli_query($connection, $admin_ret);

$row_admin = mysqli_num_rows($ret_data)>0 ;
if($admin_data = mysqli_fetch_assoc($ret_data)){
    
    echo '<br><br><br>'.$admin_data['adminlastname'];
} 
?>
<html>
<head>
	<title> Link-Up </title>
<?php
include("index_background.php");
?>
	<LINK REL="SHORTCUT ICON" HREF="./images/Linkup.ico" />
	<link href="./css/index_css.css" rel="stylesheet" type="text/css">
    <link href="./font.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="./js/Registration_validation.js"> </script>

	<!-- FontAwesom links -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="stylesheet" href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/dist/mdb5/standard/core.min.css">
	<link rel='stylesheet' id='roboto-subset.css-css'  href='https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/docs-app/css/mdb5/fonts/roboto-subset.css?ver=3.9.0-update.5' type='text/css' media='all' />

    <!-- Google Fonts Links -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">

	<!-- Bootstrap Links -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<script src="./js/Registration_validation.js"></script>
</head> 
<script>
	function time_get()
	{
		d = new Date();
		mon = d.getMonth()+1;
		time = d.getDate()+"-"+mon+"-"+d.getFullYear()+" "+d.getHours()+":"+d.getMinutes();
		Reg.fb_join_time.value=time;
	}

</script>
<body >
	<!--================================================ Header Login Form ==================================================-->
	<!--Top login form-->
	<form method="post" action="" enctype = "multipart/form-data">
		<div style="position:absolute; left:57.7%; top:1.2%; font-size:13px; color:#FFFFFF;">   Email </div>

		<div style="position:absolute; left:57.7%; top:5.18%; font-size:11px;"> <input type="text" class="form-control" name="username" style="width:149.5; height:28px;"/> </div>

		<div style="position:absolute; left:57.4%; top:9.3%; font-size:12; color:#000000;  padding-top:5px;">  <input type="checkbox" checked="checked" style="padding-top:5px;">   Keep me logged in </div>

		<div style="position:absolute;left:69.6%; top:1.2%; font-size:13px; color:#FFFFFF"> Password </div>

		<div style="position:absolute;left:69.6%; top:5.18%; font-size:13px; "> <input type="password" class="form-control" name="password" style="width:149.5; height:28px; padding-bottom:5px;"> </div>

		<div style="position:absolute;left:69.6%; top:9.2%; font-size:12px; color:#CCCCCC; padding-top:5px;"> <a href="Forgot_Password.php" style="color:#000000; text-decoration:none;"> Forgot your password? </a> </div>

		<div style="position:absolute;left:81.8%;top:5.2%; "><button class="btn btn-primary" type="button" name="Login" value="Log In" id="login_button1" style="height:28px; width:auto; padding-top:1px;">Log In</button>  </div>
	</form>

	<!-- Faceback left part -->

		<!--Left part-->
		<!--Mobile Image-->
	<!-- <div style="position:absolute; left:5%; top:35%;"> <img src="./images/Faceback_map.PNG" width="100%" height="275"> </div> -->
    <div style="position:absolute; left:7%; top:24%; color:#3B5998; font-size:28px; width:auto; height:10%"> <font face="poppins"> Congratulations!<?php echo "$admin_data[adminfirstname]"?>.... Your account has been created successfully. </font> </div>
    <!-- <div style="position:absolute; left:7%; top:30%; color:#3B5998; font-size:28px;"> <font face="poppins"> and shares every moment of life. </font></div> -->


	<?php 
    ?>

<!--============================================== Registration Section ==============================================-->


<!--============================================== Footer Section ==============================================-->
 <!--my_details -->
    <div style="display:none;" id="my_details" style="background-color:#42b72a;"> 
    <div style="position:absolute;left:12%;top:73%; height:30%; width:43%; z-index:2; background:#000; opacity:0.5; box-shadow:10px 0px 10px 1px rgb(0,0,0);">   </div>
    <div style="position:absolute;left:13%;top:75%; z-index:3;"> <img src="./Images/my.jpg" height="165" width="150" style="box-shadow:0px 0px 10px 5px rgb(0,0,0);"> </div>
    <div style="position:absolute;left:26%;top:75%; z-index:3; color:#FFF;"> <h2> <?php echo base64_decode("UHJvZi5CcmlsbGll"); ?> </h2> </div>
    <div style="position:absolute;left:26%;top:83%; z-index:3; color:#FFF;">  <h3><?php echo base64_decode("OTY0MDczNTU4OA=="); ?> </h3> </div>
    <div style="position:absolute;left:26%;top:90%; z-index:3; color:#FFF;"> <h3> <?php echo base64_decode("a3JhbnRoaS5tYXJpa2FudGlAZ21haWwuY29t"); ?>  </h3> </div>
	</div>


<?php
	include("./fb_erorr.php");
?>
</body>
</html>
