<?php

include '../../db.php';

$k = getallheaders();
$region = $k['region'];


$status = mysqli_fetch_assoc(mysqli_query($conn, "SELECT status as st from tbl_gramsevak WHERE region = '$region'"));


echo json_encode($status['st']);
