<?php
session_start();


if(!isset($_SESSION['bottle2']) && $_SESSION['bottle2'] == null){
	header("Location:admin/admin_login.php");
}


include 'admin/config/conn.php';

$show = "select * from student ";
$query =mysqli_query($conn,$show);
$row = mysqli_fetch_array($query);
//print_r($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<body>


<section class="container-fluid">
	<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Roll no.</th>
        <th scope="col">English</th>
        <th scope="col">Hindi</th>
        <th scope="col">Maths</th>
        <th scope="col">Science</th>
        <th scope="col">Politic</th>
        <th scope="col">Total_Marks</th>
        <th scope="col">Marks</th>
        <th scope="col">CGPA</th>
        <th scope="col">Grade</th>
        <th scope="col">Percentage</th>
        <th scope="col">Action</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
	  <?php
	  while($row = mysqli_fetch_array($query)){
	  ?>
	  
	  
	  <tr>
        <td><?php echo $row['id'];?></td>
	   <th scope="row"><?php echo $row['name'];?></th>
        <td><?php echo $row['roll'];?></td>
        <td><?php echo $row['english'];?></td>
        <td><?php echo $row['hindi'];?></td>
        <td><?php echo $row['math'];?></td>
        <td><?php echo $row['science'];?></td>
        <td><?php echo $row['politic'];?></td>
        <td><?php echo $row['total_mark'];?></td>
        <td><?php echo $row['marks'];?></td>
        <td><?php echo $row['cgpa'];?></td>
        <td><?php echo $row['grade'];?></td>
        <td><?php echo $row['percent'];?></td>
        <td><a class="btn-primary" href="#" style="padding:10px;">Show</a></td>
        <td><a class="btn-warning" href="#" style="padding:10px;">Edit</a></td>
	  </tr>
	  <?php
	  }?>
       
      </tr>
    </tbody>
  </table>
</div>
</section>
 

  
  <script src="js/jquery.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>