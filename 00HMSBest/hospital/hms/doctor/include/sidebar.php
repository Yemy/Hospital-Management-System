<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">

						<ul class="nav navbar-left">
							<!-- start: MESSAGES DROPDOWN -->
								<li  style="padding-top:5% ">
								<h2>Doctor</h2>
							</li>
							<li >
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<img src="assets/images/images.jpg" > <span class="username">
			
									</i></span>
								</a>
								</ul>
<nav>
						
						<!-- start: MAIN NAVIGATION MENU -->
						<div class="navbar-title">
							<span>																			<?php 
$sql=mysqli_query($con,"select * from doctors where docEmail='".$_SESSION['dlogin']."' ");
while($data=mysqli_fetch_array($sql))
{
?>
<h7 class="text-red"> Doctor <?php echo htmlentities($data['doctorName']);?></h7>
<?php } ?></span>
						</div>
						<ul class="main-navigation-menu">
							<li>
								<a href="dashboard.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-home"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Dashboard </span>
										</div>
									</div>
								</a>
							</li>
							
							<li>
								<a href="PDdashboard.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-home"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Patients </span>
										</div>
									</div>
								</a>
							</li>
							

							<li>
								<!--<a href="appointment-history.php">-->
									<a href="Apdashboard.php">
									
									<div class="item-content">
										<div class="item-media">
											<i class="ti-list"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Appointment </span>
										</div>
									</div>
								</a>
							</li>

							<!--
							<li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Patients </span><i class="icon-arrow"></i>
										</div>
									</div>
								</a>
								<ul class="sub-menu">
									
									<li>
										<a href="add-patient.php">
											<span class="title"> Add Patient</span>
										</a>
									</li>
									<li>
										<a href="manage-patient.php">
											<span class="title"> Manage Patient </span>
										</a>
									</li>
									
								</ul>
								</li>

<li>
								<a href="search.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-search"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Search </span>
										</div>
									</div>
								</a>
							</li>

						-->

						</ul>
						<!-- end: CORE FEATURES -->
						
					</nav>
					</div>
			</div>