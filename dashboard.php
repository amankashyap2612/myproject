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
$sql ="select order_table.o_id, order_table.username,order_table.product_id,order_table.price,order_table.total ,order_table.quantity ,order_table.productname ,product.image from order_table INNER JOIN product on order_table.o_id = product.p_id  where user_id = '".$userid."'   ";


$query =mysqli_query($conn, $sql);
//$array =mysqli_fetch_array($query);

//print_r($array);
		
	}
?>

<center style="margin-bottom:50px; margin-top:50px;">
<h1>Shooping Cart</h1>
</center>

<section class="container text-center">
			<div class="row" style="margin-bottom:30px;">
				<div class="col-2">
					<div>
						<h3>Product</h3>
					</div>
				</div>
				<div class="col-2">
					<div>
					<h3>Price</h3>
					</div>
				</div>
				<div class="col-2">
					<div>
					<h3>Quantity</h3>
					</div>
				</div>
				<div class="col-2">
					<div>
					<h3>Total</h3>
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
						<img src="admin/img/frontphoto/<?php echo $array['image']; ?> " style="width:80px;"/>
					</div>
				</div>
				<div class="col-2">
					<div>
					<h3 style="font-style:italic; font-family:math; color:gray;     margin-top: 30px;"><?php echo $array['price'];?></h3>
					</div>
				</div>
				<div class="col-2">
					<div>
					<h3 style="font-style:italic; font-family:math; color:gray;     margin-top: 30px;"><?php echo $array['quantity'];?></h3>
					</div>
				</div>
				<div class="col-2">
					<div>
					<h3 style="font-style:italic; font-family:math; color:gray;     margin-top: 30px;"><?php echo $array['total'];?></h3>
					</div>
				</div>
				<div class="col-2">
					<div>
					<a style="  margin-top: 30px; background-color: #b0976d;  color: #ffffff;  padding: 15px;  border: none; position: relative; top: 38px;" onclick="return confirm('Are you sure you want to delete?')" href="admin/ajax/deleteorder.php?delorder=<?php echo $array['product_id'];?>">Cancel Order</a>
					</div>
				</div>
				<div class="col-2">
					<div>
					<a style=" position: relative; top: 38px;background-color: black;  color: #ffffff;  padding: 14px 35px;  border: none;">Place Order</a>
					</div>
				</div>
			</div>
			
			
			<?php	
			}
			?>
</section>