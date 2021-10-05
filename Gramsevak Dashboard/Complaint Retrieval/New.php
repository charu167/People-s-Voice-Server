<?php
session_start();
include '../../db.php';

// foreach (getallheaders() as $name => $value) {
//     echo "$name: $value <br>";
// }

$k = getallheaders();
$region = $k['region'];
$new_complaints = mysqli_query($conn, "SELECT C_ID, name, location, status FROM tbl_Complaint WHERE status='new' AND region = '$region' AND admin = '0'");
$rows = array();
while ($r = mysqli_fetch_assoc($new_complaints)) {
    $rows[] = $r;
}

print json_encode($rows);
