<?php 
	session_start();

 include '../config/conn.php';
 
 $name =$_POST['name'];
 $roll =$_POST['roll'];
 $eng =$_POST['eng'];
 $hindi =$_POST['hindi'];
 $math =$_POST['math'];
 $science =$_POST['science'];
 $politic =$_POST['politic'];
 $total =$_POST['total'];
 $cgpa =$_POST['cgpa'];
 $grade =$_POST['grade'];
 $percent =$_POST['percent'];

 $total_marks = 500;
 
 echo $grade ;



$sql = "insert into student(id,name,roll,english,hindi,math,science,politic,total_mark,marks,cgpa,grade,percent)values('','".$name."','".$roll."','".$eng."','".$hindi."','".$math."','".$science."','".$politic."','".$total_marks."','".$total."','".$cgpa."','".$grade."','".$percent."')";


$result = mysqli_query($conn,$sql);
if($result -> num_rows > 0){
	$row =mysqli_fetch_array($result);
	$_SESSION['student'] = $row['id'];
	echo 1;
}else{
	echo 0;
}

?>