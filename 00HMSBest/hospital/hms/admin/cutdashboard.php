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
										<span>Dashboard</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
							<div class="container-fluid container-fullw bg-white">
							<div class="row">
								
								</div>
							<!---	<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Manage Doctors</h2>
										
											<p class="cl-effect-1">
												<a href="manage-doctors.php">
												<?php $result1 = mysqli_query($con,"SELECT * FROM doctors ");
$num_rows1 = mysqli_num_rows($result1);
{
?>
											Total Doctors :<?php echo htmlentities($num_rows1);  } ?>		
											
												</a>
												</a>
											</p>
										</div>
									</div>
								</div>
-->
 <div class="col-md-10 ">

 	<h4 class="my-2">Admin Dashboard</h4>
 	<div class="col-md-12 my-1"> 
 		<div class=" row">
 			<div class="col-md-3 my-2 bg-success mx-2" style="height: 180px;">
 				<div class="col-md-12">
 				 <div class="row">
        	    	<div class=" col-md-9">										
							<p class=" cl-effect-1">
							<a href="manage-doctors.php">
 							<?php $result1 = mysqli_query($con,"SELECT * FROM doctors ");
                             $num_rows1 = mysqli_num_rows($result1);
{
?>                   
                    <h3 class="my-2 text-white" style="font-size: 30px;"></h3>
                     <h3 class="my-2 text-white" style="font-size: 30px;">Total Doctors</h3>
					<h3 class="  my-2 text-white" align="center" style="font-size:30px;" >  :<?php echo htmlentities($num_rows1);  } ?>	</h3>		
											
							</a></a></p>
 				</div>		
 				<div class="col-md-3">
 					<I class="fa fa-users-cog fa-3x"> </I>			
 				</div></div></div></div> 	                
 			    <div class="col-md-3 bg-info mx-2" style="height: 180px;">
 				<div class="col-md-12">
 				 <div class="row">
        	    	<div class=" col-md-8">																
					<p class="links cl-effect-1">
					<a href="manage-users.php">

                 <?php $result = mysqli_query($con,"SELECT * FROM users ");
                 $num_rows = mysqli_num_rows($result);
                { ?>                      
                    <h3 class="my-2 text-white" style="font-size: 30px;"></h3>
                     <h3 class="my-2 text-white" style="font-size: 30px;">Total Patients</h3>
                     <h3 class="  my-2 text-white" align="center" style="font-size:30px;" >	 :<?php echo htmlentities($num_rows);  } ?>	</h3>					
                          </a> </p>										
 				</div>		
 				<div class="col-md-3">
 					<I class="fa fa-users-cog fa-3x"> </I>			
 				</div>		
 			</div>	</div>	</div>
 			 <div class="col-md-3 bg-warning mx-2" style="height: 180px;">
 				<div class="col-md-12">
 				 <div class="row">
        	    	<div class=" col-md-8">																
			<!--		<p class="links cl-effect-1">
					<a href="manage-patient.php">
                 <?php $result = mysqli_query($con,"SELECT * FROM tblpatient ");
                 $num_rows = mysqli_num_rows($result);
                {
            ?>                      
                    <h3 class="my-2 text-white" style="font-size: 30px;"></h3>
                     <h3 class="my-2 text-white" style="font-size: 30px;">Total appointments</h3>
                     <h3 class="  my-2 text-white" align="center" style="font-size:30px;" >  :<?php echo htmlentities($num_rows); }?>	</h3>							
                          ?>		
                       </a>
					   </p>	
					   -->	
										
											<p class="cl-effect-1">
												<a href="appointment-history.php">
												<?php $result1 = mysqli_query($con,"SELECT * FROM appointment ");
$num_rows1 = mysqli_num_rows($result1);
{
?>
                                  <h3 class="my-2 text-white" style="font-size: 30px;"></h3>
                     <h3 class="my-2 text-white" style="font-size: 30px;">Total appointment</h3>
					<h3 class="  my-2 text-white" align="center" style="font-size:30px;"  >:<?php echo htmlentities($num_rows1);  } ?>		</h3>		

												
											
												</a>
												</a>
											</p>								
 				</div>		
 				<div class="col-md-3">
 					<I class="fa fa-users-cog fa-3x"> </I>			
 				</div>		
 			</div>	</div>	</div> 	</div>  </div>  </div>

				<!--				<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">view appointment</h2>
										
											<p class="cl-effect-1">
												<a href="appointment-history.php">
												<?php $result1 = mysqli_query($con,"SELECT * FROM appointment ");
$num_rows1 = mysqli_num_rows($result1);
{
?>
											Total Doctors :<?php echo htmlentities($num_rows1);  } ?>		
											
												</a>
												</a>
											</p>
										</div>
									</div>
								</div>
-->

<!--<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle">Manage Patients</h2>
											
											<p class="links cl-effect-1">
												<a href="manage-patient.php">
<?php $result = mysqli_query($con,"SELECT * FROM tblpatient ");
$num_rows = mysqli_num_rows($result);
{
?>
Total Patients :<?php echo htmlentities($num_rows);  
} ?>		
</a>
											</p>
										</div>
									</div>
								</div>
--->

			<!--<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="ti-files fa-1x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> New Queries</h2>
											
											<p class="links cl-effect-1">
												<a href="book-appointment.php">
													<a href="unread-queries.php">
												<?php 
$sql= mysqli_query($con,"SELECT * FROM tblcontactus where  IsRead is null");
$num_rows22 = mysqli_num_rows($sql);
?>
											Total New Queries :<?php echo htmlentities($num_rows22);   ?>	
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
						

<div class="container-fluid">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-2" style="margin-left: -30px;">
				 

			</div>
			<div class="col-md-10">
				<div class="my-2" >Dashboard </div>
				<div class="col-md-12 my-1">
					<div class="row" style="margin: 90px; ">
					<div class="col-md-2 bg-success mx-1" style="height: 150px;">
						
					</div>
						<div class="col-md-2 bg-warning mx-1" style=" height: 130px;">
						
					</div>
						<div class="col-md-2 bg-info mx-1" style="height: 150px;">
						
					</div>
					

					</div>
				</div>
			</div>
			
		</div>
		
	</div>


















</div>
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



