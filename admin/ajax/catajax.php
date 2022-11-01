<?php
include '../config/conn.php';


$name =$_POST['t_cat_name'];

$sql ="insert into category (cat_id,name,status)values('','".$name."','.1.')";



$query = mysqli_query($conn, $sql);
print_r($query);
?>