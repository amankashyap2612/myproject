<?php include 'include/head.php';?>
<body>
	<video   loop autoplay muted  class="back-video" width="100%">
		<source src="image/id-39.mp4" type="video/mp4">
	
	</video>


<div id="wrapper">

	<div class="card card-authentication1 mx-auto my-4" style="background: transparent; width: 500px;">
		<div class="card-body"  style="border: 2px solid white;">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="image/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Login</div>
		    <form>
			  <div class="form-group">
			  <label for="Eid" class="sr-only">Email ID</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="Eid" class="form-control input-shadow" placeholder="Enter Your Email ID">
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group ">
				<div class="">
						 <label for="Pwd" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="Pwd" class="form-control input-shadow" placeholder="Choose Password">
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
			  
			 <button type="button"  id="Log" class="btn btn-light btn-block waves-effect waves-light">Login Now</button>
			  
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
		    <p class="text-warning mb-0">Not have an account? <a href="Winesign.php"> Create Account here</a></p>
		  </div>
	     </div>
   
  <!--end color switcher-->
	
	</div><!--wrapper-->
	


<?php include 'include/script.php';?>
<script>
  $(document).ready(function(){
    $("#Log").click(function(){
      
      var email = $("#Eid").val();
      var password = $("#Pwd").val();

      console.log(email);
      console.log(password);


      var obj ={
        T_email:email,
        T_password:password,
      }


      $.ajax({
				 url:"admin/ajax/signsession.php",
				 type:"POST",
				  data:obj,
				success:function(res){
						if(res == 1){
              window.location.href = 'bottle.php';
					}
				}
			});


    });
  });
</script>

</body>
</html>