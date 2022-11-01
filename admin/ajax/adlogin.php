<?php
include '../config/conn.php';

$email = $_POST['t_mail'];
$pass = $_POST['t_pass'];

$adminsql ="select * from user where email = '".$email."' and password ='".$pass."' ";
$adminquery = mysqli_query($conn, $adminsql);



	if($adminquery->num_rows > 0){
		$row = mysqli_fetch_array($adminquery);
		$_SESSION['bottle2'] = $row['user_id']; 
		echo 1;
	} else {
		echo 0;
	} 


?>