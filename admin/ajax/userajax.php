<?php
include '../config/conn.php';


$name =$_POST['t_name'];
$email =$_POST['t_email'];
$pass =$_POST['t_password'];
$mobile =$_POST['t_mobile'];

$sql ="insert into user (user_id,name,mobile,password,email)values('','".$name."','".$mobile."','".$pass."','".$email."')";



$query = mysqli_query($conn, $sql);
print_r($query);
?>