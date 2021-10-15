<?php
session_start();
include "../../db.php";


$password  = md5($_POST['password']);

$sql = "INSERT INTO tbl_Gramsevak (name, email, phone, address, region, password, status )
    VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "','" . $_POST['phone'] . "','" . $_POST['address'] . "','" . $_POST['region'] . "','$password', 1 )";
if (mysqli_query($conn, $sql)) {
   echo $password;
}
