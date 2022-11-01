<?php

include 'config/conn.php';
//category add krne ka work 
		$catsql = "select * from category";
		$catquery = mysqli_query($conn, $catsql);
//category add krne ka work end
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

   <section class="container even">
<div class="row">
	<ul id="bindList">
									
	</ul>
</div>
<div class="form-group row">

				  <div class="col-6">
					 <label for="email">Front Image:</label>	  
						<input type="file" class="form-control" id="sm" placeholder="Image" name="" accept="image/png, image/jpeg, image/webp ">
				  </div>
				  <div class="col-6">
					<label for="email">Back Image:</label>
					<input type="file" class="form-control" id="dm" placeholder="Image" name="" accept="image/png, image/jpeg, image/webp">
				  </div>
				</div>
				<div class="row">
					<div class="col-6">
						<!--category ke option add krne ka work-->
				<div class="col">
					<label for="name" class="mr-sm-2"> select category</label>
					<select id="cat" class="form-control">
						<option value=""><--select category --></option>
							<?php
								while($row = mysqli_fetch_array($catquery)){
									?>
										<option value=" <?php echo $row['id']; ?>"><?php echo $row ['name'] ;?>
										</option>
										
									<?php
								}
							
							
							?>
					</select>
				</div>
				
				
<!--category ke option add krne ka work end-->	
					</div>
					<div class="col-6">
						<div class="form-group">
						  <label for="email">Event Name:</label>
						  <input type="Name" class="form-control" id="name" value="" placeholder="Enter Name" name="email">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<div class="form-group">
						  <label for="email">Price:</label>
						  <input type="Name" class="form-control" id="price" value="" placeholder="Enter price" name="email">
						</div>
					</div>
				</div>
				<div class="form-group">
				  <label >Description:</label>
				  <textarea  id="description"  ></textarea>
				</div>
					<button type="submit" id="submit"class="btn btn-primary">Submit</button>
				
			  </div>
			</div>
</section>

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2018 Dashtreme Admin
        </div>
      </div>
    </footer>
	<!--End footer-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
   
   <script>
   CKEDITOR.replace('description');
CKEDITOR.instances['description'].setData("");


$(document).ready(function(){

$("#submit").click(function(){
		
			
	var name =$("#name").val();
	var description = CKEDITOR.instances["description"].getData();
	var cat =$("#cat").val();
	var price =$("#price").val();
	var fimage=$("#sm")[0].files[0];
	var dimage=$("#dm")[0].files[0];


	 console.log(name);
	 console.log(description);
	 console.log(cat);
	 console.log(price);
	console.log(fimage);


	var obj=new FormData();
			obj.append('t_name',name);
			obj.append('t_description',description);
			obj.append('t_cat',cat);
			obj.append('t_price',price);
			obj.append('t_fimage',fimage);
			obj.append('t_dimage',dimage);
		

console.log(obj);



$.ajax({
				url:"ajax/productajax.php",
				type:"POST",
				data:obj,
				processData:false,
				contentType:false,
				success:function(resp){
					console.log(resp);
				}
			})


})

});
   </script>
	
</body>
</html>
