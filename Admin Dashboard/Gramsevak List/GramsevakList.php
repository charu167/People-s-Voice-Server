<?php 
session_start(); 
include "../../db.php";

$trp = mysqli_query($conn, "SELECT * from tbl_Gramsevak");
$rows = array();
while($r = mysqli_fetch_assoc($trp)) {
    $rows[] = $r;
}
print json_encode($rows);//convert php data to json data
?>