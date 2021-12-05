<?php

if(isset(filter_input(INPUT_POST, 'submit'))) {

   $UserName = $_POST['Username'];
   $Password = $_POST['Password'];
   
  

$serverName = "localhost";
$dBUsername = "root" ;
$dBPassword = "";
$dBName = "cdc";




//if(isset($_POST['User_Name'])&& isset($_POST['Password'])) {


//$User_Name = $_POST['User_Name'];
//$Password = $POST['Password'];


$conn =  mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);


if(mysqli_connect_error()){
   die('Connection failed: '.mysqli_connect_errorno().')'.mysqli_connect_error());

} else {
   $SELECT = "SELECT user_name, user_password FROM vaccinator  ";
   $INSERT = "INSERT Into vaccinator (user_name, user_password) values(?,?)";

   $stmt = $conn ->prepare($SELECT);
   $stmt->bind_param("s",$UserName);
   $stmt -> execute();
   $stmt->bind_result($UserName);
   $stmt->store_result();
   $rnum = $stmt->num_rows;
   
   if($rnum==0) {
       $stmt->close();
       
       $stmt = $conn->prepare($INSERT);
       $stmt->bind_param("ssssii");
       $stmt->execute();
       echo 'User successfu;';
   }
   $stmt->close();
   $conn->close();
   
}
	
if (!empty($UserName) || empty($Password)) {
       
   } else {
       echo "All fields required";
       die();
   } 
}


