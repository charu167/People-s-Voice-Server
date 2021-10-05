<?php
    session_start();
    include '../../db.php';

    $new_complaints = mysqli_query($conn, "SELECT C_ID, name, location, status FROM tbl_Complaint WHERE status='in process'");
    $rows = array();
    while($r = mysqli_fetch_assoc($new_complaints)){
        $rows[] = $r;
    }

    print json_encode($rows);
