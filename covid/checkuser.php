<?php
session_start();
include "config.php";

$Username = mysqli_real_escape_string($conn,$_POST['Username']);
$Password = mysqli_real_escape_string($conn,$_POST['Password']);

if ($Username != "" && $Password != ""){

    $sql_query = "select count(*) as cntUser from vaccinator where user_name='".$Username."' and password='".$Password."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        $_SESSION['Username'] = $Username;
        echo 1;
        // header('Location: main.php');
        // exit();
    }else{
        echo 0;
		
    }
	
}