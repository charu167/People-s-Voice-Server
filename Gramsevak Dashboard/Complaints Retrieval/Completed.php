<?php
session_start();
include '../../db.php';


$k = getallheaders();
$region = $k['region'];
$new_complaints = mysqli_query($conn, "SELECT C_ID, u_name, c_location, forGS FROM tbl_Complaint WHERE c_region = '$region' AND forGS = '3'");
$rows = array();
while ($r = mysqli_fetch_assoc($new_complaints)) {
    $rows[] = $r;
}

print json_encode($rows);