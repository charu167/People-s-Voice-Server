<?php
session_start();
include "../../db.php";

$k = getallheaders();
$region = $k['region'];

$sql = "SELECT 
        c.u_name, c.u_address, c.u_phone, c.forGS, c.c_region, DATE_FORMAT(c.c_date, '%M %d %Y') as date , g.name as g 
        from tbl_complaint c 
        INNER JOIN 
        tbl_gramsevak g
        ON c.c_region = g.region WHERE c.c_region = '$region' ";


$result = mysqli_query($conn, $sql);

$rows = array();
while ($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);//convert php data to json data
