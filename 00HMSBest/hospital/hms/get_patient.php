<?php
include('include/config.php');
if(!empty($_POST["specilization_id"])) 
{

 $sql=mysqli_query($con,"select patient_name,patient_id from patients where specilization='".$_POST['specilization_id']."'");?>
 <option selected="selected">Select Doctor </option>
 <?php
 while($row=mysqli_fetch_array($sql))
 	{?>
  <option value="<?php echo htmlentities($row['patient_id']); ?>"><?php echo htmlentities($row['patient_name']); ?></option>
  <?php
}
}


}

?>

