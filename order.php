<?php

include 'admin/config/conn.php';

$buy =$_GET['order'];
//print_r($buy);


//user ki detail lane ke liye work start

	if(isset($_SESSION['bottle'])){
		$userid = $_SESSION['bottle'];
		$userdata = "select * from user where user_id = '".$userid."'";
		$getuser = mysqli_query($conn, $userdata);
		$userinfo = mysqli_fetch_array($getuser);
		//print_r($userinfo['name']);
	}
//user ki detail lane ke liye work end



$det =" select * from product  where p_id = '".$buy."' ";
$detque = mysqli_query($conn, $det);
$da = mysqli_fetch_array($detque);
//print_r($da);

// $qun = $da['price'];
// print_r($qun);
?>
<?php include 'include/head.php';?>
<div>
<section class="" style="background-color:black;">
    <div class="container">
      <div class="row">
       <?php include 'include/nav.php';?>
      </div>
    </div>
</section>



<section class="container" style=" margin-top: 60px; margin-bottom: 60px;">
<div class="row">
	<div class="col-6" style="padding:0;z-index: -1;">
		<div>
			<img style="width:100%;"  src="admin/img/backphoto/<?php echo $da['dimage'];?>"/>
		</div>
	</div>
	<div class="col-6" style="border: 1px solid gray;">
		<div style="padding: 50px 20px;">
			<h2 style=" margin-bottom: 30px; font-style:italic; font-family:math;" id="name">Name :- <span style="font-size:20px;"> <?php echo $da['name'];?></span></h2>
			<h5 style=" margin-bottom: 30px; font-style:italic; font-family:math;" id="price">Price :- <?php echo $da['price'];?> ₹</h5>
			<div class="row">
				<h5 style=" margin-right: 10px; margin-left: 10px;margin-bottom: 30px;font-style:italic; font-family:math;" id=""> Total Price :- </h5>
				<h5 style=" margin-bottom: 30px;font-style:italic; font-family:math;" id="total"><?php echo $da['price'];?> </h5>
			</div>
			<label for="quantity" onchange = "quantity()">Quantity :- </label>
			<input type="number"  value="1" id="quantity" name="quantity" min="1" max="5"><br>
			<span style="color:red; font-style:italic; font-family:math;">Maximum Quantity for is 5</span><br>
			<button  style=" margin-top:30px; background-color: black;  color: #ffffff;  padding: 14px 35px;  border: none;" id="order">Order Now</button>
			<p  style=" margin-top:30px; font-style:italic; font-family:math;">Service delivery can be defined as any contact with the public administration during which customers – citizens, residents or enterprises – seek or provide data, handle their affairs or fulfil their duties. These services should be delivered in an effective, predictable, reliable and customer-friendly manner.</p>
		</div>
	</div>
</div>
</section>
</div>

<?php include 'include/script.php';?>
</body>
<script>


$(document).ready(function(){
	$("#quantity").change(function(){
 var quantity = $("#quantity").val();
 var price = "<?php echo $da['price'];?>";
//console.log(price);
 //console.log(quantity);
 var total =(quantity * price);
//console.log(total);

$("#total").html(total);

});


$("#order").click(function(){
	var name ="<?php echo $da['name'];?>";
	var id ="<?php echo $da['p_id'];?>";
	var user_id ="<?php echo $userinfo['user_id'];?>";
	var user_name ="<?php echo $userinfo['name'];?>";
	var price = "<?php echo $da['price'];?>";
	var total =$("#total").html();
	var quantity =$("#quantity").val();
	
	//console.log(name);
	//console.log(price);
	//console.log(total);
	//console.log(quantity);
	
	
	var obj ={
		tid:id,
		tuid:user_id,
		tun:user_name,
		tn:name,
		tp:price,
		ttp:total,
		tq:quantity,
	}
	
	console.table(obj);
	
	$.ajax({
		url:"admin/ajax/orderajax.php",
		type:"POST",
		data:obj,
		success:function(resp){
			console.log(resp);
			
			
			
			window.swal({
  title: "Checking...",
  text: "Please wait",
  imageUrl: "https://i.pinimg.com/originals/43/41/55/434155007ecd200001fcc2bff837eb08.gif",
  showConfirmButton: false,
  allowOutsideClick: false
});

//using setTimeout to simulate ajax request
setTimeout(() => {
  window.swal({
    title: "We Reciver Your Order!",
    showConfirmButton: false,
    timer: 1000
  });
}, 2000);
			
			
			
			
		}
	});
	
	
	
	
});



});

</script>
</html>