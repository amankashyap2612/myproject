<?php
session_start();
include '../config/conn.php';

$email =$_POST['T_email'];
$password =$_POST['T_password'];


$authsql = "select * from user where email='".$email."' and password ='".$password."' ";


$query = mysqli_query($conn, $authsql);
	
	if($query->num_rows > 0){
		$row = mysqli_fetch_array($query);
		$_SESSION['bottle'] = $row['user_id']; 
		echo 1;
	} else {
		echo 0;
	} 


?>