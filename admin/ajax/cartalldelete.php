<?php
include '../config/conn.php';

$empty =$_GET['empty'];
echo $empty;

$eql="delete * from cart where cart_id='".$empty."'";
 $equery =mysqli_query($conn,$eql);

	if($equery){
		
		// echo "successfully delete";
		
		header("Location: ../../cart.php");
	}else{
		echo "something worng";
	}
?>