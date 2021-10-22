<?php
include '../../db.php';

if (isset($_POST['name']) && isset($_POST['password'])) {


    $name = $_POST['name'];

    $password = md5($_POST['password']);

    $sql = "SELECT name, region, status, password FROM tbl_gramsevak WHERE name = '$name' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if ($row['name'] === $name && $row['password'] === $password) {
            
            echo json_encode($row);
        } else {
            echo 0;
        }
    } else {
        echo 0 ;
    }
} else {
    echo -1;
}
