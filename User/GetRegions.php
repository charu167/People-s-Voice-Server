<?php

include '../db.php';

$regions = mysqli_query($conn, "SELECT region from tbl_gramsevak");
$rows = array();

while ($r = mysqli_fetch_assoc($regions)) {
    $rows[] = $r;
}

print json_encode($rows);
