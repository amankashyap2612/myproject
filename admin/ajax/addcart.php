<?php
include '../config/conn.php';

session_start();

	if(isset($_SESSION['bottle'])){
		$userid = $_SESSION['bottle'];
		$userdata = "select * from user where user_id = '".$userid."'";
		$getuser = mysqli_query($conn, $userdata);
		$userinfo = mysqli_fetch_array($getuser);
		print_r($userinfo['user_id']);
	}


$rt =$_GET['insert'];
//echo $rt; 


$pql ="select * from product where p_id = '".$rt."' ";
$pquery= mysqli_query($conn, $pql);
$parrray = mysqli_fetch_array($pquery);
print_r($parrray['price']);
print_r($parrray['image']);
print_r($parrray['name']);
print_r($parrray['description']);



$cql ="insert into cart(cart_id,cart_name,cart_price,cart_image,cart_description,cart_user)values('','".$parrray['name']."','".$parrray['price']."','".$parrray['image']."','".$parrray['description']."','".$userinfo['user_id']."') ";

echo $cql;

$cquery =mysqli_query($conn,$cql);
if($cquery){
	header("Location: ../../cart.php");
}else{
	echo 0;
}
?>