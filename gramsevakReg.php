<?php
session_start(); 
include "db.php";

$sql = "INSERT INTO tbl_Gramsevak (name, email,password,address,phone, region, status)
    VALUES ('".$_POST['name']."', '".$_POST['email']."','".$_POST['password']."','".$_POST['address']."','".$_POST['phone']."','".$_POST['region']."', 1 )";
if (mysqli_query($conn,$sql)) {
$data = array('data');
    echo json_encode($data);
    // echo 0;
} 
?>