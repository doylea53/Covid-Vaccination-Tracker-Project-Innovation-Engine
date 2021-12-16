<?php
session_start();
include "config.php";

$fName = mysqli_real_escape_string($conn,$_POST['fName']);
$lName= mysqli_real_escape_string($conn,$_POST['lName']);
$doseNumber= mysqli_real_escape_string($conn,$_POST['doseNumber']);
if ($fName != "" && $lName != ""){
  //$sql_query = "select count(*) as cntUser from patient where First_Name='".$fName."' and Last_Name ='".$lName."'";
   $sql_query = "select count(*) as cntUser from patient where First_Name='".$fName."'  and Last_Name ='".$lName."'and Dose_num='".$doseNumber."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
      echo 1;
      $_SESSION['fName'] = $fName;

     // $sql = "SELECT Patient_Id as patientID, Middle_Name as middleName, DOB as dateOfBirth, Gender as gender, Race as race, Ethnicity as ethnicity, Street as street, State as state, Zip as zip, Vac_manfac as vacManfac, Lot_num as lotNum, Dose_num as doseNumber, Prim_insure as primInsure, Insurer as insurer, Dofv as dofv, Dosv as dosv, Arm as arm, Refusal as refusal, Effects as effects FROM patient WHERE First_Name='".$fName."'";
	$sql = "SELECT  First_Name as fName ,Middle_Name as middleName, DOB as dateOfBirth,Gender as gender, Race as race, Ethnicity as ethnicity, Street as street , State as state, Zip as zip, Vac_manfac as vacManfac, Lot_num as lotNum, Dose_num as doseNumber  ,Prim_insure as primInsure , Insurer as insurer, Patient_Id as patientID , Vac_Date as vacDate ,  Arm as arm , Refusal as refusal ,  Effects as effects FROM patient WHERE First_Name='".$fName."' and Dose_num ='".$doseNumber."'";
      $r = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($r);

      $_SESSION['fName'] = $fName;
      $_SESSION['lName'] = $lName;

      

      $mName = $row['middleName'];
      $_SESSION['mName'] = $mName;

      $dateOfBirth = $row['dateOfBirth'];
      $_SESSION['dob'] = $dateOfBirth;

      $gender = $row['gender'];
      $_SESSION['gender'] = $gender;

      $race = $row['race'];
      $_SESSION['race'] = $race;

      $ethnicity = $row['ethnicity'];
      $_SESSION['ethnicity'] = $ethnicity;

      $street = $row['street'];
      $_SESSION['street'] = $street;

      $state = $row['state'];
      $_SESSION['state'] = $state;

      $zip = $row['zip'];
      $_SESSION['zip'] = $zip;

      $vacManfac = $row['vacManfac'];
      $_SESSION['vaccine'] = $vacManfac;

      $lotNum = $row['lotNum'];
      $_SESSION['lot'] = $lotNum;

      $doseNumber = $row['doseNumber'];
      $_SESSION['doseNumber'] = $doseNumber;

      $primInsure = $row['primInsure'];
      $_SESSION['pih'] = $primInsure;

      $insurer = $row['insurer'];
      $_SESSION['insurer'] = $insurer;

     $patientId = $row['patientID'];
      $_SESSION['pid'] = $patientId;
	  
	  $vacDate = $row['vacDate'];
      $_SESSION['vacDate'] = $vacDate;

      $arm = $row['arm'];
      $_SESSION['arm'] = $arm;

      $refusal = $row['refusal'];
      $_SESSION['denied'] = $refusal;

      $effects = $row['effects'];
      $_SESSION['effects'] = $effects;
	   
	   
	   
	
    }else{

       echo 0;
    }
}

?>