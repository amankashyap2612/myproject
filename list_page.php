<?php 
include 'admin/config/conn.php';

$cat_id =$_GET['list'];
//print_r($cat_id);

$catsql ="select * from product where cat_id = '".$cat_id."' ";
$catque =mysqli_query($conn, $catsql);

//print_r($catarray);






?>
<?php include 'include/head.php';?>
<body>
<section class="" style="background-color:black;">
    <div class="container">
      <div class="row">
       <?php include 'include/nav.php';?>

		<div class="">
			<img src="image/owine.jpg" style="width:100%;"/>
      </div>
      </div>
    </div>
</section>

<section class="container" style="margin-top:30px;">
	<div class="row">
	<?php 
	while($catarray =mysqli_fetch_array($catque)){
	?>
		<div class="col-4">
			<a href="detailpage.php?detail=<?php echo $catarray['p_id'];?>" style="color:black; text-decoration:none;">
			<div style="width: 350px;background: whitesmoke; padding:20px;">
				<img src="admin/img/frontphoto/<?php echo $catarray['image'];?>" style="width:100%;"/>
			</div>
			<div  style="  margin-bottom: 32px;width: 350px;background: whitesmoke; padding:20px; margin-top:20px;">
				<h5 style="white-space: nowrap;text-overflow: ellipsis; overflow: hidden;"><?php echo $catarray['name'];?></h5>
				<h6 style="    margin-bottom: 40px; margin-top: 25px;">Price :- <?php echo $catarray['price'];?></h6>
				 <div class="row">
					<div class="col-6">
						<a style="background-color: #b0976d;  color: #ffffff;  padding: 15px;  border: none; margin-right:20px;" href="admin/ajax/addcart.php?insert=<?php echo  $catarray['p_id'];?>">Add To Cart</a>
					</div>
					<div class="col-6">
						 <a style="background-color: black;  color: #ffffff;  padding: 14px 35px;  border: none;">Buy Now</a>
					</div>
				 </div>
			</div>
			</a>
		</div>
		<?php
	}?>
	</div>
</section>
<?php include 'include/footer.php';?>
<?php include 'include/script.php';?>
</body>
</html>