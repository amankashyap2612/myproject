<?php
 include '../config/form2conn.php';

$name= $_POST['T_name'];
$status= $_POST['T_status'];
$date= $_POST['T_date'];

// print_r($name);
// print_r($status);
 $sql="insert into category (id,name,status,createddate) VALUES ('','".$name."','".$status."','".$date."')";
 $result=mysqli_query($conn,$sql);
 //print_r($result);
 if($result){
	 echo 1;
 }else{
	 echo 0;
 }





?>