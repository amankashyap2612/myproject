<?php include 'include/head.php';?>
<body>
<section class="" style="background-color:black;">
    <div class="container">
      <div class="row">
       <?php include 'include/nav.php';?>
      </div>
    </div>
</section>

<?php
include 'admin/config/conn.php';

	if(isset($_SESSION['bottle'])){
		$userid = $_SESSION['bottle'];
$sql ="select * from cart where cart_user = '".$userid."' ORDER BY cart_id DESC";


$query =mysqli_query($conn, $sql);
$emptyquery =mysqli_query($conn, $sql);
$emptyarray =mysqli_fetch_array($emptyquery);

//print_r($array);
		
	}
?>

<center style="margin-bottom:50px; margin-top:50px;">
<h1>Shooping Cart</h1>
</center>

<section class="container" style="margin-bottom:50px;">
	<div class="row">
		<div class="col-6 text-left">
			<a onclick="history.back()" style="  margin-top: 30px; background-color: #b0976d;  color: #ffffff;  padding: 15px;  border: none;" >Go back</a>
		</div>
		<div class="col-6 text-right">
			<a style="background-color: transparent; color: red; padding: 8px 18px; border: 1px solid; border-radius: 20px;" href="admin/ajax/cartalldelete.php?empty=<?php echo $emptyarray['cart_id']?>">Empty Cart</a>
		</div>
	</div>
</section>
<section class="container text-center">
			<div class="row" style="margin-bottom:30px;">
				<div class="col-2">
					<div>
						<h3>Product</h3>
					</div>
				</div>
				<div class="col-2">
					<div>
					<h3>Name</h3>
					</div>
				</div>
				<div class="col-2">
					<div>
					<h3>Price</h3>
					</div>
				</div>
				<div class="col-2">
					<div>
					<h3>Description</h3>
					</div>
				</div>
				<div class="col-4">
					<div>
					<h3>Speciality</h3>
					</div>
				</div>
			</div>
			 <?php
				   while($array =mysqli_fetch_array($query)){  
			?>
			<div class="row" style="margin-bottom: 40px; border: 1px solid gray; padding: 15px 0px;">
				<div class="col-2">
					<div>
						<img src="admin/img/frontphoto/<?php echo $array['cart_image']; ?> " style="width:80px;"/>
					</div>
				</div>
				<div class="col-2">
					<div>
					<p style="font-style:italic; font-family:math; color:gray;     margin-top: 30px;"><?php echo $array['cart_name'];?></p>
					</div>
				</div>
				<div class="col-2">
					<div>
					<p style="font-style:italic; font-family:math; color:gray;     margin-top: 30px;"><?php echo $array['cart_price'];?>₹</p>
					</div>
				</div>
				<div class="col-2">
					<div>
					<textarea  rows="4" cols="20" style="font-style:italic; font-family:math; color:gray;     margin-top: 30px; overflow:hidden;"><?php echo $array['cart_description'];?></textarea>
					</div>
				</div>
				<div class="col-2">
					<div>
					<a style="  margin-top: 30px; background-color: #b0976d;  color: #ffffff;  padding: 15px;  border: none; position: relative; top: 38px; border-radius:10px;"  href="order.php?detail=<?php echo $array['cart_id'];?>">Buy Now</a>
					</div>
				</div>
				<div class="col-2">
					<div>
					<a style=" position: relative; top: 38px;background-color: black;  color: #ffffff;  padding: 14px 35px;  border: none; border-radius:10px;" href="admin/ajax/cartdelete.php?deletecart=<?php echo $array['cart_id']?>">Delete</a>
					</div>
				</div>
			</div>
			
			
			<?php	
			}
			?>
</section>