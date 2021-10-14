<?php
session_start();
include "../../db.php";

$password = $_POST['password'];
$password  = md5($password);

$sql = "INSERT INTO tbl_Gramsevak (name, email, phone, address, region, password, status )
    VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "','" . $_POST['phone'] . "','" . $_POST['address'] . "','" . $_POST['region'] . "','$password', 1 )";
if (mysqli_query($conn, $sql)) {
    $data = array('data');
    echo json_encode($data);
}
