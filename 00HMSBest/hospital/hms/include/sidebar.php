<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">

						<ul class="nav navbar-left">
							<!-- start: MESSAGES DROPDOWN -->
								<li  style="padding-top:5% ">
								<h2>Patients</h2>
							</li>
							<li >
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<img src="assets/images/download.jfif" > <span class="username">
			
									</i></span>
								</a></ul>
<nav>
						<div class="navbar-title">
							<span>
<?php 
$sql=mysqli_query($con,"select * from patients where patient_email='".$_SESSION['login']."' ");
while($data=mysqli_fetch_array($sql))
{
?>
<h6 class="text-red"> <?php echo htmlentities($data['patient_name']);?></h6>
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
										</div></div></a></li>
							<li>
								<a href="PAdashboard.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-pencil-alt"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Appointment </span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="Discharge_paper.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-pencil-alt"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Dissharge </span>
										</div>
									</div>
								</a>
							</li>


<!--
<li>
								<a href="manage-medhistory.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-list"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Medical History </span>
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