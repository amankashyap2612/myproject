<?php
include '../config/conn.php';

$pname = $_POST['tn'];
$price = $_POST['tp'];
$total = $_POST['ttp'];
$quantity =  $_POST['tq'];
$id = $_POST['tid'];


$uid = $_POST['tuid'];
$uname = $_POST['tun'];

$date =  date('d-m-y h:i:s');

//echo $date ;



$sql ="insert into order_table(o_id,user_id,product_id,username,productname,price,total,quantity,status,booking_date)values('','".$uid."','".$id."','".$uname."','".$pname."','".$price."','".$total."','".$quantity."', 1,'".$date."')";


echo $sql;
$query= mysqli_query($conn,$sql);
echo $query;

if($query){
	echo "Succesfully Purchased";
	
}else{
	echo 'something wrong';
}
?>