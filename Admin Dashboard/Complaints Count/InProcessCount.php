<?php
session_start();
include "../../db.php";

$result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM tbl_complaint WHERE status = 'in process'");
$data = mysqli_fetch_assoc($result);

echo ($data['total']);
?>