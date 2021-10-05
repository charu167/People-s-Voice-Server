<?php
session_start();
include "./db.php";
$sql = "INSERT INTO tbl_complaint (email, complaint_type, complaint_description, location,region, name, address, phone, status,GS_ID)
        VALUES(
                '" . $_POST['email'] . "',
                '" . $_POST['complaint_type'] . "', 
                '" . $_POST['complaint_description'] . "', 
                '" . $_POST['location'] . "',
                '" . $_POST['region'] . "',
                '" . $_POST['name'] . "', 
                '" . $_POST['address'] . "', 
                '" . $_POST['phone'] . "', 
                'new',(SELECT GS_ID FROM tbl_gramsevak WHERE region = '" . $_POST['region']. "')
                )
                ";

if (mysqli_query($conn, $sql)) {
    $data = array('data');
    echo json_encode($data);
   
}
else{
    echo -1;
}