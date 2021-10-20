<?php
session_start();
include '../../db.php';
$putdata = fopen("php://input", 'r');
$str = stream_get_contents($putdata);
// fclose($putdata);

// $sql = "UPDATE tbl_complaint SET forAdmin = '1' WHERE C_ID = $str";


// if (mysqli_query($conn, $sql)) {
//     echo $str;
// }

echo $str ;
