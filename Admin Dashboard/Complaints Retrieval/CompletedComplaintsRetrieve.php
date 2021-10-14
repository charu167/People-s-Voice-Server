<?php
    session_start();
    include '../../db.php';

    $new_complaints = mysqli_query($conn, "SELECT C_ID, u_name, c_location, forAdmin FROM tbl_Complaint WHERE forAdmin='3'");
    $rows = array();
    while($r = mysqli_fetch_assoc($new_complaints)){
        $rows[] = $r;
    }

    print json_encode($rows);
?>