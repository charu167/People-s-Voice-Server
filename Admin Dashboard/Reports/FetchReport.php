<?php
session_start();
include "../../db.php";

$sql = "SELECT 
        c.name, c.address, c.phone, c.status, c.region, DATE_FORMAT(c.complaint_date, '%M %d %Y') as date , g.name as g 
        from tbl_complaint c
        INNER JOIN 
        tbl_gramsevak g
        ON c.region = g.region";


$result = mysqli_query($conn, $sql);

$rows = array();
while ($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
}
print json_encode($rows);//convert php data to json data
