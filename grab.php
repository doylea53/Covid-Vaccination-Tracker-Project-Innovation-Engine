<?php
session_start();
include "config.php";

$fName = mysqli_real_escape_string($conn,$_POST['fName']);
$lName= mysqli_real_escape_string($conn,$_POST['lName']);

if ($fName != "" && $lName != ""){

    $sql_query = "select count(*) as cntUser from patient where First_Name='".$fName."' and Last_Name ='".$lName."'";
    $result = mysqli_query($conn,$sql_query);
    $row = mysqli_fetch_array($result);

    $count = $row['cntUser'];

    if($count > 0){
        echo 1;
        $_SESSION['fName'] = $fName;

        $sql = "SELECT * FROM patient";

        $r = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($r);

    }else{

        echo 0;
    }
}