<?php 
	include '../config/conn.php';
	//profile photo work
	$photo = $_FILES['t_fimage']; //khali image k lie 
	$temp = $photo['tmp_name'];
	//khali image k lie 
	$date = date('y-m-d-H-i-s');
	//echo $date;
	$filename = $date."photo.jpg";
	//print_r($filename);
	move_uploaded_file($temp, '../img/frontphoto/'.$filename);
	
	//profile photo end
	
	//detail photo work
	$dphoto = $_FILES['t_dimage'];//detail photo k lie
		$temp1 = $dphoto['tmp_name'];
	$date1 =rand(1,100000);
	//echo $date;
	$filename1 = $date1."dphoto.jpg";
	
	move_uploaded_file($temp1, '../img/backphoto/'.$filename1);
	print_r($filename1);
	
	//detail photo end
	
	$name =$_POST['t_name'];
	$price =$_POST['t_price'];
	$description =$_POST['t_description'];
	$cat_id =$_POST['t_cat'];	
// yeh query chalayi yha pr
	
	 $sql ="insert into product (p_id,name,image,dimage,price,description,status,cat_id)values('','".$name."','".$filename."','".$filename1."','".$price."','".$description."','.1.','".$cat_id."')";

// query end

 $query = mysqli_query($conn, $sql);
	 print_r($query);




?>