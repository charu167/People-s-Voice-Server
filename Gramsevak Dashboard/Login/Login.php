<?php
include '../../db.php';

if (isset($_POST['name']) && isset($_POST['password'])) {


    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT Name, region, status, password FROM tbl_gramsevak WHERE Name = '$name' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        if ($row['Name'] === $name && $row['password'] === $password) {

            echo json_encode($row);
        } else {
            echo 0;
        }
    } else {
        echo 0;
    }
} else {
    echo -1;
}
