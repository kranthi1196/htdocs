<?php
	include("Valid.php");
	//include("Signup_success.php");
	if (isset($_REQUEST['signup'])) {
		header('Location:signup_success.php');
	//    header('Location:fee_payment.php');
	}
	if (isset($_REQUEST['logout'])) {
		include 'logout.php';
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
<body>
	<!--================================================ Header Login Form ==================================================-->
	<!--Top login form-->
	<form method="POST" action="" enctype = "multipart/form-data">
		<div style="position:absolute; left:57.7%; top:1.2%; font-size:13px; color:#FFFFFF;">   Email </div>

		<div style="position:absolute; left:57.7%; top:5.18%; font-size:11px;"> <input type="text" class="form-control" name="username" style="width:149.5; height:28px;"/> </div>

		<div style="position:absolute; left:57.4%; top:9.3%; font-size:12; color:#000000;  padding-top:5px;">  <input type="checkbox" checked="checked" style="padding-top:5px;">   Keep me logged in </div>

		<div style="position:absolute;left:69.6%; top:1.2%; font-size:13px; color:#FFFFFF"> Password </div>

		<div style="position:absolute;left:69.6%; top:5.18%; font-size:13px; "> <input type="password" class="form-control" name="password" style="width:149.5; height:28px; padding-bottom:5px;"> </div>

		<div style="position:absolute;left:69.6%; top:9.2%; font-size:12px; color:#CCCCCC; padding-top:5px;"> <a href="Forgot_Password.php" style="color:#000000; text-decoration:none;"> Forgot your password? </a> </div>

		<div style="position:absolute;left:81.8%;top:5.2%; "><button class="btn btn-primary" type="submit" name="Login" value="Log In" id="login_button1" style="height:28px; width:auto; padding-top:1px;">Log In</button>  </div>
	</form>

	<!-- Faceback left part -->

		<!--Left part-->
		<!--Mobile Image-->
	<div style="position:absolute; left:5%; top:35%;"> <img src="./images/Faceback_map.png" width="700" height="275"> </div>
    <div style="position:absolute; left:7%; top:24%; color:#3B5998; font-size:28px; width:700;"> <font face="poppins"> Link-Up helps connecting people together </font> </div>
    <div style="position:absolute; left:7%; top:30%; color:#3B5998; font-size:28px;"> <font face="poppins"> and shares every moment of life. </font></div>


<!--============================================== Registration Section ==============================================-->
	<!-- Registration -->
	<form  method="post" onSubmit="return check();" name="Reg">
		<div style="position:absolute;left:58%; top:18.5%; color:#000066; font-size:25"> <h5> Sign Up </h5> </div>
		<div style="position:absolute;left:58%; top:24.6%; color:#000000;">  It's free and always will be.  </div>
		<div style="position:absolute;left:57.3%; top:29.1%; height:1; width:385; background-color:#CCCCCC;"> </div>

		
		<div style="position:absolute;left:59.4%; top:36%; font-size:16px; color:#000000;"><i class="fas fa-user fa-lg me-3 fa-fw" style="position:absolute;left:59.4%; top:34%;"></i></div>
		<div style="position:absolute;left:65.2%; top:32.8%; "> <input type="text" class="form-control" name="first_name"  maxlength="15" placeholder="First Name" style="width:255px;"/> </div>

		<div style="position:absolute;left:59.4%; top:43%; font-size:16px; color:#000000"><i class="fas fa-user fa-lg me-3 fa-fw" style="position:absolute;left:59.4%; top:34%;"></i></div>
		<div style="position:absolute;left:65.2%;  top:39.8%; "> <input type="text" class="form-control" name="last_name"  maxlength="15" placeholder="Last Name" style="width:255px;"/> </div>

		<div style="position:absolute;left:59.4%; top:50%; font-size:16px; color:#000000"><i class="fas fa-envelope fa-lg me-3 fa-fw" style="position:absolute;left:59.4%; top:34%;"></i> </div>
		<div style="position:absolute;left:65.2%;  top:46.8%; "> <input type="text" class="form-control" name="email"  maxlength="50" placeholder="Email Address" style="width:255px;"/> </div>

		<div style="position:absolute;left:59.4%; top:57%; font-size:16px; color:#000000"><i class="fas fa-envelope fa-lg me-3 fa-fw"></i></div>
		<div style="position:absolute;left:65.2%; top:53.8%; "> <input type="text" class="form-control" name="remail"  maxlength="50" placeholder="Confirm Email Address" style="width:255px;"/> </div>

		<div style="position:absolute;left:59.4%; top:64%; font-size:16px; color:#000000"><i class="fas fa-lock fa-lg me-3 fa-fw"></i></div>
		<div style="position:absolute;left:65.2%; top:60.8%; "> <input type="password" class="form-control" name="password"  maxlength="15" placeholder="Create a Password" style="width:255px;"/> </div>

		<div style="position:absolute;left:59.4%; top:70.5%; font-size:16px; color:#000000"><i class="fas fa-venus-mars fa-lg me-3 fa-fw"></i></div>
		<div style="position:absolute;left:65.2% ;top:67.8%;">

		<select class="select col-md-8 mb-4 form-control" name="sex" style="width:255px;height:35px;font-size:18px;color:black;padding:3;color:#6c757d;padding-left:12px">
			<option class="select" value="Select"> Select Sex </option>
			<option value="Female"> Female </option>
			<option value="Male"> Male </option>
		</select>
		</div>

<div style="position:absolute;left:59.4%; top:76.8%; font-size:16px; color:#000000"><i class="fas fa-birthday-cake fa-lg me-3 fa-fw"></i></div>
	<div style="position:absolute;left:65.2%; top:74%;">
	<select class="form-control" name="month" style="width:85px;font-size:18px;height:32;padding:1;color:#6c757d;padding-left:12px">
	<option value="Month"> Month </option>

	<script type="text/javascript">

		var m=new Array("","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		for(i=1;i<=m.length-1;i++)
		{
			document.write("<option value='"+i+"'>" + m[i] + "</option>");
		}
	</script>

	</select>
	</div>



	<div style="position:absolute; left:71.6%; top:74%;">
	<select name="day" class="form-control" style="width:85px;font-size:18px;height:32;padding:1; color:#6c757d;padding-left:12px">
	<option value="Day"> Day </option>

	<script type="text/javascript">

		for(i=1;i<=31;i++)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}

	</script>

	</select>
	</div>

	<div style='position:absolute;left:78%;top:74%;'>
	<select name="year" class="form-control" style="width:85px; font-size:18px; height:32; padding:1; color:#6c757d;padding-left:12px">
	<option value="Year"> Year </option>

	<script type="text/javascript">

		for(i=1996;i>=1960;i--)
		{
			document.write("<option value='"+i+"'>" + i + "</option>");
		}

	</script>

	</select>
	</div>
		<input type="hidden" name="fb_join_time">
		 
		<!-- <div style="position:absolute;left:65.4%; top:72%; padding-bottom:15px;">
			<button class="btn btn-success" type="submit" name="signup1" id="sign_button" style="padding-left:auto;padding-right:auto; background-color:#42b72a;width:200px;height:45px;">Sign Up</button>
		</div>  -->

		<div style="position:absolute;left:65.4%; top:82%; padding-bottom:15px;"><button class="btn btn-success" type="submit" name="signup" value="Sign Up" id="sign_button1"  onClick="time_get()" style="padding-left:auto;padding-right:auto; background-color:#42b72a;width:200px;height:45px;  "> <!-- <a href="" style="text-decoration: none; color:rgb(255,255,255); font-weight:550;"> Sign Up</a> --> </button><p style="text-decoration: none; color:rgb(255,255,255); font-weight:600; position:absolute; left:35%;top:18%">Sign Up</p></div> 
		</form>
		<div style="position:absolute;left:57.3%; top:92%; height:1; width:385; background-color:#CCCCCC;"> <!-- signup bottom line --> </div>

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
