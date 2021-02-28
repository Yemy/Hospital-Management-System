<div id="app">		
<?php include('include/sidebar.php');?>
<div class="app-content">
<?php include('include/header.php');?>
<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Admin | View Patients</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Admin</span>
</li>
<li class="active">
<span>View Patients</span>
</li>
</ol>
</div>
</section>
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
		<title>Admin  | Dashboard</title>
		
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
									<h1 class="mainTitle">Admin | Dashboard</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>doctor</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
<!--
							<div class="container-fluid container-fullw bg-white">
							<div class="row">
									</div>
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Manage Doctor</h2>										
											<p class="cl-effect-1">
												<a href="manage-doctors.php">
												press here:												
												</a>
												</a>
											</p>
										</div></div></div>
									-->
<div class="col-md-10 my-1"> 
 		<div class=" row">
 			    <div class="col-md-4 bg-warning mx-2" style="height: 180px;">
 				<div class="col-md-12">
 				 <div class="row">
        	    	<div class=" col-md-8">																
					<p class="links cl-effect-1">
					<a href="manage-doctors.php">                  
                    <h3 class="my-2 text-white" style="font-size: 30px;"></h3>
                     <h3 class="my-2 text-white" style="font-size: 30px;">Manage Doctor</h3>
                     <h5 class="my-2 text-white" style="font-size: 20px;">  Press Here:</h5>
                    <!-- <h3 class="  my-2 text-white" align="center" style="font-size:30px;" >Press Here</h3>	-->
                     <h3 class="  my-2 text-white" align="center" style="font-size:30px;" >	</h3>					                       </a> </p>										
 				</div>		
 				<div class="col-md-3">
 					<I class="fa fa-users-cog fa-3x"> </I>			
 				</div>	</div>	</div>	</div>

			    <div class="col-md-4 bg-info mx-2" style="height: 180px;">
 				<div class="col-md-12">
 				 <div class="row">
        	    	<div class=" col-md-8">																
					<p class="links cl-effect-1">
					<a href="manage-doctors.php">                  
                    <h3 class="my-2 text-white" style="font-size: 30px;"></h3>
                     <h3 class="my-2 text-white" style="font-size: 30px;">Register Doctor</h3>
                     <h5 class="my-2 text-white" style="font-size: 20px;">  Press Here:</h5>
                    <!-- <h3 class="  my-2 text-white" align="center" style="font-size:30px;" >Press Here</h3>	-->
                     <h3 class="  my-2 text-white" align="center" style="font-size:30px;" >	</h3>					                       </a> </p>										
 				</div>		
 				<div class="col-md-3">
 					<I class="fa fa-users-cog fa-3x"> </I>			
 				</div>	</div>	</div>	</div>
<!--
<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Register Doctor</h2>
											
											<p class="links cl-effect-1">
												<a href="add-doctor.php">
	                      press here
</a>
											</p>
										</div>	</div>	</div>
	--><!--
			<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="ti-files fa-1x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Approve Doctor</h2>
											
											<p class="links cl-effect-1">
												<a href="approve-doctor.php">
													<a href="doctors_job_request.php">
<?php
                 $result= mysqli_query($con, "SELECT *FROM doctors where STATUS='pending'");
                 $num_rows= mysqli_num_rows($result);
                 
                { ?> 
											Total job request :<?php echo htmlentities($num_rows);  } ?>		
												</a>
												</a>
											</p>
										</div>
									</div>
								</div>
-->
			    <div class="col-md-4 bg-success mx-2" style="height: 180px;">
 				<div class="col-md-12">
 				 <div class="row">
        	    	<div class=" col-md-8">																
					<p class="links cl-effect-1">
					<a href="doctors_job_request.php">                  
                    <h3 class="my-2 text-white" style="font-size: 30px;"></h3>
                     <h3 class="my-2 text-white" style="font-size: 30px;">Approve Doctor</h3>
                     <h5 class="my-2 text-white" style="font-size: 20px;"> 
<?php
                 $result= mysqli_query($con, "SELECT *FROM doctors where STATUS='pending'");
                 $num_rows= mysqli_num_rows($result);
                 
                { ?> 
											Total job request :<?php echo htmlentities($num_rows);  } ?>	</h5>
                    <!-- <h3 class="  my-2 text-white" align="center" style="font-size:30px;" >Press Here</h3>	-->
                     <h3 class="  my-2 text-white" align="center" style="font-size:30px;" >	</h3>					                       </a> </p>										
 				</div>		
 				<div class="col-md-3">
 					<I class="fa fa-users-cog fa-3x"> </I>			
 				</div>	</div>	</div>	</div>
        <!--    
			<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="ti-files fa-1x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Doctor Specialization</h2>
											
											<p class="links cl-effect-1">
												<a href="doctor-specilization.php">
													<a href="doctor-specilization.php">
														press here:
												</a>
												</a>
											</p>
										</div>
									</div>
								</div>-->
 <div class="col-md-4 bg-info mx-2" style="height: 180px;">
 				<div class="col-md-12">
 				 <div class="row">
        	    	<div class=" col-md-8">																
					<p class="links cl-effect-1">
					<a href="doctor-specilization.php">                  
                    <h3 class="my-2 text-white" style="font-size: 30px;"></h3>
                     <h3 class="my-2 text-white" style="font-size: 30px;">Doctor Specialization</h3>
                     <h5 class="my-2 text-white" style="font-size: 20px;">  Press Here:</h5>
                    <!-- <h3 class="  my-2 text-white" align="center" style="font-size:30px;" >Press Here</h3>	-->
                     <h3 class="  my-2 text-white" align="center" style="font-size:30px;" >	</h3>					                       </a> </p>										
 				</div>		
 				<div class="col-md-3">
 					<I class="fa fa-users-cog fa-3x"> </I>			
 				</div>	</div>	</div>	</div>

 <div class="col-md-4 bg-success mx-2" style="height: 180px;">
 				<div class="col-md-12">
 				 <div class="row">
        	    	<div class=" col-md-8">																
					<p class="links cl-effect-1">
					<a href="doctor_search.php">
					<a href="doctor_search.php">
						</a>                 
                    <h3 class="my-2 text-white" style="font-size: 30px;"></h3>
                     <h3 class="my-2 text-white" style="font-size: 30px;">Search Doctor</h3>
                     <h5 class="my-2 text-white" style="font-size: 20px;">  Press Here:</h5>
                    <!-- <h3 class="  my-2 text-white" align="center" style="font-size:30px;" >Press Here</h3>	-->
                     <h3 class="  my-2 text-white" align="center" style="font-size:30px;" >	</h3>					                       </a> </p>										
 				</div>		
 				<div class="col-md-3">
 					<I class="fa fa-users-cog fa-3x"> </I>			
 				</div>	</div>	</div>	</div>

<!--
			<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="ti-files fa-1x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Search Doctor </h2>											
											<p class="links cl-effect-1">
												<a href="doctor_search.php">
													<a href="doctor_search.php">
										press here::
												</a>
												</a>
											</p>
										</div>
									</div>
								</div>
-->
							</div>
						</div>
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			<>
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
