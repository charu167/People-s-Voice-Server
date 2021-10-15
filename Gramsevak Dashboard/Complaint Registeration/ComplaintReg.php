<?php
include "../../db.php";

$k = getallheaders();
$region = $k['region'];

$sql = "INSERT INTO tbl_complaint (c_type, c_description, c_location, c_region, u_name, u_email, u_address, u_phone, forGS, GS_ID)
        VALUES(
            '" . $_POST['c_type'] . "',
                '" . $_POST['c_description'] . "', 
                '" . $_POST['c_location'] . "', 
                '$region', 
                '" . $_POST['u_name'] . "',
                '" . $_POST['u_email'] . "', 
                '" . $_POST['u_address'] . "', 
                '" . $_POST['u_phone'] . "', 
                '1',
                (SELECT GS_ID FROM tbl_gramsevak WHERE region = '$region')
                )
                ";

$res = mysqli_query($conn, $sql);
if ($res) {

    $data = array('data');
    echo json_encode($data);
}
