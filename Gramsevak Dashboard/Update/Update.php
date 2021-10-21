<?php
session_start();
include '../../db.php';


$k = getallheaders();
$region = $k['region'];
$qry = mysqli_query($conn,"select * from tbl_gramsevak where region='$region'"); 
$data = mysqli_fetch_assoc($qry);

$e=$data['email'];
$n=$data['name'];
$a=$data['address'];
$p=$data['phone'];
$pa=$data['password'];

$email = empty($_POST['email'])? $e:$_POST['email'];

$name = empty($_POST['name'])? $n:$_POST['name'];
$address = empty($_POST['address'])? $a:$_POST['address'];
$phone ="";
if($_POST['phone']==NULL){
    $phone = $p;   
}
else{
    $phone =$_POST['phone'];
}



$password = empty($_POST['password'])? $pa:md5($_POST['password']);





$edit = mysqli_query($conn,"update tbl_gramsevak set name='$name', email='$email', password='$password', address='$address', phone='$phone' where region='$region'");

if($edit)
{ 
    echo 123;
}
else
{
    echo mysqli_error();
}    	

