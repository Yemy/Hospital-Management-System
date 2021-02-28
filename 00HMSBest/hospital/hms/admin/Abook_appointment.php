<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();
if(isset($_POST['submit']))
{	
$docspecialization=$_POST['Doctorspecialization'];
$patient_id=$_POST['patient_id'];
$docid=$_POST['docid'];
$docfees=$_POST['docfees'];
$appDate=$_POST['appDate'];
$apptime=$_POST['apptime'];
$sql=mysqli_query($con,"insert into appointment(specilization_id,patient_id ,doctors_id,consultancyFees,appointmentDate,appointmentTime,patient_status, STATUS) values('$docspecialization','$patient_id' ,'$docid','$docfees','$appDate','$apptime','1', '1')");
if($sql)
{
echo "<script>alert('Appointment added Successfully');</script>";
//echo "<script>window.location.href ='manage-doctors.php'</script>";
}
}
?>
<!--INSERT INTO `appointment`(`id`, `doctorSpecialization`, `patient_id`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`, `doctors_id`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11])-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Book Appointment</title>
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
									<h1 class="mainTitle">Admin |Book Appointment</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Add Doctor</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Book Appointment</h5>
												</div>
												<div class="panel-body">
									
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														<div class="form-group">
															<label for="DoctorSpecialization">
																Doctor Specialization by id
															</label>
							<select name="Doctorspecialization" class="form-control" required="true">
																<option value="">Select Specialization</option>
<?php $ret=mysqli_query($con,"select * from doctorspecilization");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['specilization_id']);?>">
																	<?php echo htmlentities($row['specilization_id']);?>(<?php echo htmlentities($row['specilization']);?>)
																</option>
																<?php } ?>
																
															</select>
														</div>


																<div class="form-group">
															<label for="patient_id">
																Patient id
															</label>
							<select name="patient_id" class="form-control" required="true">
																<option value="">Select Patient Id</option>
<?php $ret=mysqli_query($con,"select * from patients where patient_status='1'");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['patient_id']);?>">
																	<?php echo htmlentities($row['patient_id']);?>
																</option>
																<?php } ?>
																
															</select>
														</div>
														<div class="form-group">
															<label for="docid">
																Doctor id
															</label>
							<select name="docid" class="form-control" required="true">
																<option value="">Select Doctor Id</option>
<?php $ret=mysqli_query($con,"select * from doctors where STATUS ='1'  ");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['doctors_id']);?>">
																	<?php echo htmlentities($row['doctors_id']);?>(<?php echo htmlentities($row['specilization']);?>)
																</option>
																<?php } ?>
																
															</select>
														</div>	
															
<div class="form-group">
															<label for="fess">
																 Doctor Consultancy Fees
															</label>
					<input type="text" name="docfees" class="form-control"  placeholder="Enter Doctor Consultancy Fees" required="true">
														</div>
						<label for="appdate">
															 Appointment	Date
															</label>
<input class="form-control datepicker" name="appDate" id="timepicker1" data-date-format="yyyy-mm-dd">
	
														</div>														
<div class="form-group">
															<label for="apptime">													
													Appointment	Time													
															</label>
			<input class="form-control" name="apptime" id="timepicker1" required="required">
														</div>		

																											
															
														<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
															Submit
														</button>
									 				</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
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
