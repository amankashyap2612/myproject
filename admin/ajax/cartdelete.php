<?php
include '../config/conn.php';


$del = $_GET['deletecart'];
echo $del;


 $sql="delete from cart where cart_id='".$del."'";
 $query =mysqli_query($conn,$sql);

	if($query){
		
		// echo "successfully delete";
		
		header("Location: ../../cart.php");
	}else{
		echo "something worng";
	}




?>