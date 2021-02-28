<?php
include('include/config.php');
if(!empty($_POST["specilizationid"])) 
{
 $sql=mysqli_query($con,"select doctorName,doctors_id from doctors where specilization='".$_POST['specilization_id']."'");?>
 <option selected="selected">Select Doctor </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['doctors_id']); ?>"><?php echo htmlentities($row['doctorName']); ?></option>
  <?php
}}
if(!empty($_POST["doctor"])) 
{
$sql=mysqli_query($con,"select docFees from doctors where doctors_id='".$_POST['doctors_id']."'");
 while($row=mysqli_fetch_array($sql))
 	{?>
 <option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
  <?php
}}
?>

