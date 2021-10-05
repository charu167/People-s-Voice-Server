<?php
session_start();
include '../../db.php';

$new_complaints = mysqli_query($conn, "SELECT C_ID, name, email, phone, address FROM tbl_complaint");
$rows = array();
while ($r = mysqli_fetch_assoc($new_complaints)) {
    $rows[] = $r;
}

print json_encode($rows);
