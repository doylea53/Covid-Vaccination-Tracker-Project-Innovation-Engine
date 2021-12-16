<?php
include "config.php";



$pid = $_POST['pid'];
	
$fName = $_POST['fName'];
$mName = $_POST['mName'];
$lName = $_POST['lName'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$race = $_POST['race'];
$ethnicity = $_POST['ethnicity'];
$street = $_POST['street'];
$state= $_POST['state'];
$zip = $_POST['zip'];
$vaccine = $_POST['vaccine'];
$lot = $_POST['lot'];
$doseNumber = $_POST['doseNumber'];
$pih = $_POST['pih'];
$insurer = $_POST['insurer'];
$vDate1 = $_POST['vDate1'];
$vDate2 = $_POST['vDate2'];
$arm = $_POST['arm'];
$denied = $_POST['denied'];
$notes = $_POST['notes'];




	$sql = "UPDATE patient SET First_Name='$fName',Middle_Name=' $mName',Last_Name='$lName',DOB='$dob',Gender='$gender',Race='$race',Ethnicity='$ethnicity',Street='$street',State='$state',Zip='$zip',Vac_manfac='$vaccine',Lot_num='$lot',Dose_num='$doseNumber',Prim_insure='$pih',Insurer='$insurer',Dofv='$vDate1',Dosv='$vDate2',Arm='$arm',Refusal='$denied',Effects='$notes' WHERE Patient_Id = '$pid'";
	$result = mysqli_query($conn,$sql);
 
 
 
?>