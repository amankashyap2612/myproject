<?php

include '../config/conn.php';
$id =$_POST['t_id'];
$n =$_POST['t_n'];
$e =$_POST['t_e'];
$m =$_POST['t_m'];
$p =$_POST['t_p'];


$sql ="update user set name='".$n."', mobile='".$m."', password='".$p."',email='".$e."' where id = '".$id."' ";

	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}


?>