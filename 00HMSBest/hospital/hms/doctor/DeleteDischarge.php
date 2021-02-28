<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Manage Appointment</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				

					<?php include('include/header.php');?>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Doctor  | Manage Appointment</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Doctor </span>
									</li>
									<li class="active">
										<span>Manage Appointment</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<!--
 <div class="modal-body">
                                                <table class="table table-bordered table-hover data-tables">

                                 <form method="post" name="submit">

<tr>
    <th>Patient Name</th>
    <td>
    <input name="viewid" placeholder="patient Id" class="form-control wd-150" required="true"></td>
  </tr> 
      <tr>
    <th>Blood Pressure :</th>
    <td>
    <input name="bp" placeholder="Blood Pressure" class="form-control wd-450" required="true"></td>
  </tr>                          
     <tr>
    <th>Blood Sugar :</th>
    <td>
    <input name="bs" placeholder="Blood Sugar" class="form-control wd-450" required="true"></td>
  </tr> 
  <tr>
    <th>Weight :</th>
    <td>
    <input name="weight" placeholder="Weight" class="form-control wd-450" required="true"></td>
  </tr>
  <tr>
    <th>Body Temprature :</th>
    <td>
    <input name="temp" placeholder="Blood Sugar" class="form-control wd-450" required="true"></td>
  </tr>
</table>
</div>-->

					<div class="col-md-10">
		<h5 class="text-center my-2 ">Total Appointment</h5>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<table class="table table-bordered">
						<tr>
							<td colspan="2" class="text-cener"> Appointment Details </td>
						</tr>

						<tr>
							<td>Patient Name</td>
							<td></td>
						</tr>
					<tr>
							<td> Gender</td>
							<td></td>
						</tr>

						<tr>
							<td> Phone No.</td>
							<td></td>
						</tr>
						<tr>
							<td>Appointment Date</td>
							<td></td>
						</tr>
						<tr>
							<td>Patient Name</td>
							<td></td>
						</tr>
					</table>
			</div>
			<div class="col-md-6">
				<h5 class="text-cener my-1">Invoice</h5>
				<form method="post">
					<label >Fee</label>
						<input type="number" name="fee" class="form-control" autocomplete="off" placeholder="Enter patient Fee"> 
					<label >Description</label>
						<input type="text" name="des" class="form-control" autocomplete="off" placeholder="Enter Description">
						<input type="submit" name="and" value="send"> 
		</form>
		</div>			
			</div>
		</div>
		
	</div>		
		</div>
	</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Doctor | Manage Appointment</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				

					<?php include('include/header.php');?>
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Doctor  | Manage Appointment</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Doctor </span>
									</li>
									<li class="active">
										<span>Manage Appointment</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<!--
 <div class="modal-body">
                                                <table class="table table-bordered table-hover data-tables">

                                 <form method="post" name="submit">

<tr>
    <th>Patient Name</th>
    <td>
    <input name="viewid" placeholder="patient Id" class="form-control wd-150" required="true"></td>
  </tr> 
      <tr>
    <th>Blood Pressure :</th>
    <td>
    <input name="bp" placeholder="Blood Pressure" class="form-control wd-450" required="true"></td>
  </tr>                          
     <tr>
    <th>Blood Sugar :</th>
    <td>
    <input name="bs" placeholder="Blood Sugar" class="form-control wd-450" required="true"></td>
  </tr> 
  <tr>
    <th>Weight :</th>
    <td>
    <input name="weight" placeholder="Weight" class="form-control wd-450" required="true"></td>
  </tr>
  <tr>
    <th>Body Temprature :</th>
    <td>
    <input name="temp" placeholder="Blood Sugar" class="form-control wd-450" required="true"></td>
  </tr>
</table>
</div>-->

					<div class="col-md-10">
		<h5 class="text-center my-2 ">Total Appointment</h5>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<table class="table table-bordered">
						<tr>
							<td colspan="2" class="text-cener"> Appointment Details </td>
						</tr>

						<tr>
							<td>Patient Name</td>
							<td></td>
						</tr>
					<tr>
							<td> Gender</td>
							<td></td>
						</tr>

						<tr>
							<td> Phone No.</td>
							<td></td>
						</tr>
						<tr>
							<td>Appointment Date</td>
							<td></td>
						</tr>
						<tr>
							<td>Patient Name</td>
							<td></td>
						</tr>
					</table>
			</div>
			<div class="col-md-6">
				<h5 class="text-cener my-1">Invoice</h5>
				<form method="post">
					<label >Fee</label>
						<input type="number" name="fee" class="form-control" autocomplete="off" placeholder="Enter patient Fee"> 
					<label >Description</label>
						<input type="text" name="des" class="form-control" autocomplete="off" placeholder="Enter Description">
						<input type="submit" name="and" value="send"> 
		</form>
		</div>			
			</div>
		</div>
		
	</div>		
		</div>
	</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
