<?php
session_start();
include "../../db.php";

$sql = "SELECT 
        c.u_name, c.u_address, c.u_phone, c.forAdmin, c.c_region, DATE_FORMAT(c.c_date, '%M %d %Y') as date , g.name as g 
        from tbl_complaint c 
        INNER JOIN 
        tbl_gramsevak g
        ON c.c_region = g.region WHERE c.forAdmin != '0' ";



$result = mysqli_query($conn, $sql);

$rows = array();
while ($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);//convert php data to json data
