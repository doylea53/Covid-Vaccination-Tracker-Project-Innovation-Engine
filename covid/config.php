<?php

$serverName = "localhost";
$dBUsername = "root" ;
$dBPassword = "";
$dBName = "cdc";


//
//
////if(isset($_POST['User_Name'])&& isset($_POST['Password'])) {
//
//
////$User_Name = $_POST['User_Name'];
////$Password = $POST['Password'];
//
//
$conn =  mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

 
if(!$conn){
    die("Connection failed: " .mysqli_connect_error());

}
//	
//
//$query = "SELECT User_Name, Password FROM cdc.vaccinator";
//
//
//
//


//$con->close();
?>
