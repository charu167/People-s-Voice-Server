<?php
    session_start();
    include '../../db.php';

    $new_complaints = mysqli_query($conn, "SELECT C_ID, u_name,c_location,c_description, forAdmin FROM tbl_Complaint WHERE forAdmin='1'");
    $rows = array();
    while($r = mysqli_fetch_assoc($new_complaints)){
        $rows[] = $r;
    }

    print json_encode($rows);
