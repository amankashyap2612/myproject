<?php 
include 'admin/config/conn.php';


$detail = $_GET['detail'];
//print_r($detail);

$det =" select * from product  where p_id = '".$detail."' ";
$detque = mysqli_query($conn, $det);
$detarray = mysqli_fetch_array($detque);

$cat_d = $detarray['cat_id'];
//print_r($cat_d);

$cat =" select * from product  where cat_id = '".$cat_d."' ";
$catq =mysqli_query($conn, $cat);



?>
<?php include 'include/head.php';?>
<body>
<section class="" style="background-color:black;">
    <div class="container">
      <div class="row">
       <?php include 'include/nav.php';?>
      </div>
    </div>
</section>

<section class="container "  style="margin-top:30px;">
	<div class="row">
		<div class="col-md-6" style="z-index:-1;">
			<div style="width:100% padding:20px;">
				<img src="admin/img/backphoto/<?php echo $detarray['dimage'];?>" style="width:100%;"/>
			</div>
		</div>
		<div class="col-md-6" style="z-index:1;">
			<h6 style="    margin-top: 20px;"> Category</h6>
				<h1 style="    font-size: 48px; margin: 0 0 80px 0; line-height: 56px; font-family: emoji;"><?php echo $detarray['name'];?></h1>
				<p><?php echo $detarray['description'];?></p>
				<h1 style="    margin-bottom: 40px; margin-top: 25px; font-size:48px; font-family:emoji;"> <?php echo $detarray['price'];?>₹</h1>
				<?php
				if(isset($_SESSION['bottle'])){
				?>
				
			 <a href="order.php?order=<?php echo $detarray ['p_id'];?>" style="background-color: black;  color: #ffffff;  padding: 14px 35px;  border: none;">Buy Now</a>
			 <?php
				}else{
				?>
				 <a href="winesign.php" style="background-color: black;  color: #ffffff;  padding: 14px 35px;  border: none;">Buy Now</a>
			<?php
				}?>
		</div>
	</div>
</section>

<section class="container" style="margin-top:5rem;">
<div>
	<h2 style="font-family:math; font-style:italic; margin-bottom:30px;" class="int">Suggestion For You</h2>
</div>
<div class="owl-carousel owl-theme" style="height:auto;">
		<?php 
			while($ctarray = mysqli_fetch_array($catq)){
		?>
			<a href="detailpage.php?detail=<?php echo $ctarray['p_id'];?>"><div class="item style="height:auto;"" style="height:200px; "><img src="admin/img/frontphoto/<?php echo $ctarray['image'];?>"   style="object-fit:scale-down; width: 200px; height: 200px;"/></div>
			</a>
		<?php
		}?>
</div>
</section>


<?php include 'include/footer.php';?>

<?php include 'include/script.php';?>
<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    //margin:10,
   autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})
</script>
</body>
</html>
