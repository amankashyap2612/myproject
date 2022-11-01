<?php
include 'admin/config/conn.php';

$profile =$_GET['profile'];
//print_r($profile);


$sql="select * from user where id ='".$profile."' ";
$query =mysqli_query($conn,$sql);
$array =mysqli_fetch_array($query);
//print_r($array);

?>
<?php include 'include/head.php';?>
<div style=" background-color: #61533c; height:100vh;">
<section class="" style="background-color:black; ">
    <div class="container">
      <div class="row">
       <?php include 'include/nav.php';?>
      </div>
    </div>
</section>

<section class="container" style="width:500px; margin-top: 30px; border: 1px solid gray; padding:30px; background-color: whitesmoke;">
	<div class="row">
		<div class="col-6">
			<div>
				<img src="image/dummy.jpg" style="width:100%;"/>
				<h3><?php echo $array['name'];?></h3>
			</div>
		</div>
		<div class="col-6">
				<div>
					<div style="margin-bottom:15px;">
						<label>Name :-</label>
						<input onclick="validateUserName();" id="name"  value="<?php echo $array['name'];?>"/>
					</div>
					<div style="margin-bottom:15px;">
						<label>Mobile :-</label>
						<input maxlength="10" pattern="[0-9]{10}" id="mobile" value="<?php echo $array['mobile'];?>"/>
					</div>
					<div style="margin-bottom:15px;">
						<label>Password :-</label>
						<input id="pass" value="<?php echo $array['password'];?>"/>
					</div>
					<div style="margin-bottom:15px;">
						<label>Email :-</label>
						<input  id="email" value="<?php echo $array['email'];?>"/>
					</div>
				</div>
				<button class="sv" id="svv" onclick="return confirm('Are you sure you want to Change')">Save Change</button>
		</div>
	</div>
</section>

</div>

<?php include 'include/script.php';?>

<script>
$(document).ready(function(){
	$("#svv").click(function(){
		var id="<?php echo $array['id'];?>";
		var name =$("#name").val();
		var mobile =$("#mobile").val();
		var email =$("#email").val();
		var pass =$("#pass").val();
		
		
		var obj={
			t_id:id,
			t_n:name,
			t_m:mobile,
			t_e:email,
			t_p:pass,
		}
		console.table(obj);
		
		
		$.ajax({
			url:"admin/ajax/profileupdate.php",
			type:"POST",
			data:obj,
			success:function(resp){
				console.log(resp);
			}
			
		});
		
		
		
	});
});
</script>

<script>
   function validateUserName($userName) {
     if(preg_match('/^[a-zA-Z][0-9a-zA-Z_]{2,23}[0-9a-zA-Z]$/',             $userName)) {
       return true;
     }
     return false;
   }

</script>

</body>
</html>