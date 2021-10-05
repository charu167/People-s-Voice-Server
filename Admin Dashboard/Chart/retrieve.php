<?php 
session_start(); 
include "db.php";

$months = array('January','February','March','April','May','June','July','August','September','October','November','December');
$final = array();
for($i=0;$i<12;++$i){
    
$trp = mysqli_query($conn, "SELECT status, COUNT(status) as ct FROM tbl_TestData where MONTHNAME(time)= '$months[$i]' GROUP BY status");
   $newCount = array();

while($r=mysqli_fetch_assoc($trp)){

    $newCount[]=$r;
}
$final[$months[$i]] = $newCount;
unset($newCount);
}


print json_encode($final);
?>