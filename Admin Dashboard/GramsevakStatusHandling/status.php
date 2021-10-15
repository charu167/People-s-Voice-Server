<?php
session_start();
include '../../db.php';
$putdata = fopen("php://input", 'r');
$str = stream_get_contents($putdata);
fclose($putdata);
$ID = $str;



$sql_gs = "SELECT status as st, region as region FROM tbl_gramsevak WHERE GS_ID = $ID";





$a = mysqli_fetch_assoc(mysqli_query($conn, $sql_gs));




if ($a['st'] == 0) {

    $sql = "UPDATE tbl_gramsevak SET status = 1 WHERE GS_ID = $ID";
} else {
    $sql = "UPDATE tbl_gramsevak SET status = 0 WHERE GS_ID = $ID";
    $region = $a['region'];
    $sql_com = "UPDATE tbl_complaint SET forAdmin = '1' WHERE c_region = '$region' AND forAdmin = '0' ";
    mysqli_query($conn, $sql_com);
}
if (mysqli_query($conn, $sql)) {
    echo 1;
} else {
    echo 0;
}
