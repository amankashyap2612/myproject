<?php include 'include/head.php';?>
<body>
	<video   loop autoplay muted  class="back-video" width="100%">
		<source src="image/wine.mp4" type="video/mp4">
	
	</video>


<div id="wrapper">

	<div class="card card-authentication1 mx-auto my-4" style="background: transparent; width: 500px;">
		<div class="card-body" style="border: 2px solid white;">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="image/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Sign Up</div>
		    <form>
			  <div class="form-group">
			  <label for="exampleInputName" class="sr-only">Name</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="Name" class="form-control input-shadow" placeholder="Enter Your Name">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputEmailId" class="sr-only">Email ID</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="Email" class="form-control input-shadow" placeholder="Enter Your Email ID">
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group row">
				<div class="col-6">
						 <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="Password" class="form-control input-shadow" placeholder="Choose Password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
				</div>
				
				<div class="col-6">
				<label for="exampleInputPassword" class="sr-only">Mobile</label>
					   <div class="position-relative has-icon-right">
						  <input type="tel" maxlength="10" pattern="[0-9]{10}" id="Mobile" class="form-control input-shadow" placeholder="Choose Mobile">
						  <div class="form-control-position">
							  <i class="icon-lock"></i>
						  </div>
					   </div>
				</div>
			  </div>
			  
			   <div class="form-group">
			     <div class="icheck-material-white">
                   <input type="checkbox" id="user-checkbox" checked="" />
                   <label for="user-checkbox" style="color:white;">I Agree With Terms & Conditions</label>
			     </div>
			    </div>
			  
			 <button type="button"  id="sub" class="btn btn-light btn-block waves-effect waves-light">Sign Up</button>
			  <div class="text-center mt-3">Sign Up With</div>
			  
			 <div class="form-row mt-4">
			  <div class="form-group mb-0 col-6">
			   <button type="button" class="btn btn-light btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
			 </div>
			 <div class="form-group mb-0 col-6 text-right">
			  <button type="button" class="btn btn-light btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
			 </div>
			</div>
			
			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3"  style="border: 2px solid white;">
		    <p class="text-warning mb-0">Already have an account? <a href="winelogin.php"> Sign In here</a></p>
		  </div>
	     </div>
   
  <!--end color switcher-->
	
	</div><!--wrapper-->
	


<?php include 'include/script.php';?>
<script>
 $(document).ready(function(){
    $("#sub").click(function(){
      
      var name = $("#Name").val();
      var email = $("#Email").val();
      var password = $("#Password").val();
      var mobile =$("#Mobile").val();



      var obj ={
        t_name:name,
        t_email:email,
        t_password:password,
        t_mobile:mobile,
      }

      console.table(obj);

      $.ajax({
				 url:"admin/ajax/userajax.php",
				 type:"POST",
				  data:obj,
				success:function(res){
						if(res == 1){
              window.location.href = 'winelogin.php';
					}
				}
			});


    });
  });
</script>

</body>
</html>