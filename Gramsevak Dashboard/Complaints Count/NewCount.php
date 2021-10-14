<?php
session_start();
include "../../db.php";

$k = getallheaders();
$region = $k['region'];

$result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tbl_complaint WHERE forGS = '1' AND c_region = '$region'");
$data = mysqli_fetch_assoc($result);

echo ($data['total']);
