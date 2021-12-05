<?php



include "config.php";



$fName = mysqli_real_escape_string($conn,$_POST['fName']);
$mName= mysqli_real_escape_string($conn,$_POST['mName']);

$lName= mysqli_real_escape_string($conn,$_POST['lName']);



if ($fName != "" && $lName != ""){



//Might need to change some variables names here, but this should be good.

$sql_query = "select count(*) as cntUser from patient where First_Name='".$fName."' and Last_Name ='".$lName."'";

$result = mysqli_query($conn,$sql_query);

$row = mysqli_fetch_array($result);



$count = $row['cntUser'];




if($count > 0){

$_SESSION['fName'] = $fName;

echo 1;



//Ignore the 2 comments directly above this.

//In this block of code, make another $sql_query that this time grabs all the data from that user that we just verified.
$sql = "SELECT * FROM patient";

$r = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($r);

}else{

echo 0;

}





}