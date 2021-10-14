<?php 
include "../../db.php";

$months = array('January','February','March','April','May','June','July','August','September','October','November','December');
$newCount = [];

$k = getallheaders();
$region = $k['region'];

for($i=0;$i<12;++$i){
    $query1 = mysqli_query($conn, "SELECT COUNT(*) as ct FROM tbl_complaint where MONTHNAME(c_date)= '$months[$i]' and forGS='1' and c_region = '$region'");
    $r1=mysqli_fetch_assoc($query1);
    array_push($newCount,$r1["ct"]);
}

print json_encode($newCount);

?>