<?php
include_once('include/config.php');
if(isset($_POST['apply']))
{
$fname=$_POST['full_name'];
$docspecialization=$_POST['Doctorspecialization'];
$address=$_POST['address'];
$doccontactno=$_POST['doccontact'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$confirm_password=md5($_POST['con_password']);

$error= array();

if(empty($fname)){
$error('apply')= "Enter Name";	
}
else if(empty($docspecialization)){
$error('apply')= "Enter Doctor specilization";	
}
else if(empty($address)){
$error('apply')= "Enter Address";	
}
else if(empty($doccontactno)){
$error('apply')= "Enter phone Number";	
}
else if(empty($email)){
$error('apply')= "Enter Email";	
}
else if(empty($password)){
$error('apply')= "Enter password";	
}
else if($confirm_password!=$password){
$error('apply')= "Confirm password";	
}

if (count($error) == 0) {
	$query="INSERT INTO doctors(specilization, doctorName, address, contactno, docEmail, password, creationDate, STATUS) VALUES ('$docspecialization','$fname','$address','$doccontactno',$email','$password',Now(), '$pending')";
	$result = mysqli_query($con,$query);
	if ($result) {
		echo " <script> alert('You have Successfully Applied')</script>";
		header("location:index.php");
		# code...
	} else{
		"<script>alert('You have Successfully Applied')</script>";
	}
	}# code...

if (isset($error['apply'])) {
	$s=$error['apply'];
	$show="<h5 class='text-center alert alert-danger'>$s</h5>";
	# code...
}else{
	$show= "";
	}
}
	?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Apply Now</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
		
		
		

	</head>

	<body class="login">
		<!-- start: REGISTRATION -->
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
					<img src="assets/images/logo.png" alt="Clip-Two"/>
				</div>
				<!-- start: REGISTER BOX -->
				<div class="box-register">
					<form name="registration" id="registration"  method="post">
						<h1 class="mainTitle">Apply Now!!!</h1>
						<div>
						<!--	<?php echo $show; ?> -->
						</div>
						<fieldset>
							<legend>
								Sign Up
							</legend>
							<p>
								Enter your personal details below:
							</p>
							
								<div class="form-group">


<div class="form-group">
															<label for="address">
																 Doctor Name
															</label>
					<textarea name="fname" class="form-control"  placeholder="Full Name" required="true"></textarea>
														</div>
															<label for="DoctorSpecialization">
																Doctor Specialization
															</label>
							<select name="Doctorspecialization" class="form-control" required="true">
																<option value="">Select Specialization</option>
<?php $ret=mysqli_query($con,"select * from doctorspecilization");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['specilization']);?>">
																	<?php echo htmlentities($row['specilization']);?>
																</option>
																<?php } ?>
																
															</select>
														</div>


<div class="form-group">
															<label for="address">
																 Doctor Clinic Address
															</label>
					<textarea name="clinicaddress" class="form-control"  placeholder="Enter Doctor Clinic Address" required="true"></textarea>
														</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Address" required>
							</div>
							
<div class="form-group">
									<label for="fess">
																 Doctor Contact no
															</label>
					<input type="text" name="doccontact" class="form-control"  placeholder="Enter Doctor Contact no" required="true">
														</div>
							<p>
								Enter your account details below:
							</p>
							<div class="form-group">
								<span class="input-icon">
									<input type="email" class="form-control" name="email" id="email" onBlur="userAvailability()"  placeholder="Email" required>
									<i class="fa fa-envelope"></i> </span>
									 <span id="user-availability-status1" style="font-size:12px;"></span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<span class="input-icon">
									<input type="password" class="form-control" name="password_again" placeholder="Password Again" required>
									<i class="fa fa-lock"></i> </span>
							</div>
							<div class="form-group">
								<div class="checkbox clip-check check-primary">
									<input type="checkbox" id="agree" value="agree">
									<label for="agree">
										I agree
									</label>
								</div>
							</div>
							<div class="form-actions">
								<p>
									Already have an account?
									<a href="index.php">
										Log-in
									</a>
								</p>
								<button type="submit" class="btn btn-primary pull-right" id="apply" name="submit">
									Apply <i class="fa fa-arrow-circle-right"></i>
								</button>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase"> HMS</span>. <span>All rights reserved</span>
					</div>

				</div>

			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
		
	<script>
function userAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'email='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>	
		
	</body>

	<!-- end: BODY -->
</html>