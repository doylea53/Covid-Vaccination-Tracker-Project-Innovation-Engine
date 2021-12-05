<?php
include "config.php";




	
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


	$sql = "INSERT INTO patient ( `First_Name`, `Middle_Name`, `Last_Name`, `DOB`, `Gender`, `Race`, `Ethnicity`, `Street`, `State`, `Zip`, `Vac_manfac`, `Lot_num`, `Dose_num`, `Prim_insure`, `Insurer`, `Dofv`, `Dosv`, `Arm`, `Refusal`, `Effects`) VALUES ('$fName' ,'$mName', '$lName', '$dob' , '$gender', '$race', '$ethnicity', '$street','$state', '$zip', '$vaccine', '$lot', '$doseNumber', '$pih', '$insurer',   '$vDate1', '$vDate2', '$arm', '$denied', '$notes')";
	$result = mysqli_query($conn,$sql);
 
 
 
?>