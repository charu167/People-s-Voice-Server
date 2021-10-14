<?php
session_start();
include '../../db.php';

$new_complaints = mysqli_query($conn, "SELECT C_ID, u_name, u_email, u_phone, u_address FROM tbl_complaint WHERE forAdmin != '0'");
$rows = array();
while ($r = mysqli_fetch_assoc($new_complaints)) {
    $rows[] = $r;
}

print json_encode($rows);
