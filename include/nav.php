<?php
session_start();

include 'admin/config/conn.php';


	if(isset($_SESSION['bottle'])){
		$userid = $_SESSION['bottle'];
		$userdata = "select * from user where user_id = '".$userid."'";
		$getuser = mysqli_query($conn, $userdata);
		$userinfo = mysqli_fetch_array($getuser);
		
	}


$cat ="select * from category";
$catquery =mysqli_query($conn,$cat);
//$catarray = mysqli_fetch_array($catquery);

?>
<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:#a88f65;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
  text-align:left;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<div class="col-3">
            <img src="image/logo.png"  onclick="history.go(0)" alt="" style="width: 60%; padding-top: 20px;">
        </div>
        <div class="col-9">
          <nav class="vill">
            <ul class="ull">             
              <button class="btn btn-default btn-sm dropdown-toggle " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="    color: rgb(255, 255, 255); font-weight: 600;text-transform: capitalize; margin-top: 10px top: -9px;">
									<!--<img src="admin/img/userphoto/<?php echo $userinfo['photo']?>" style=" width: 35px; height: 35px; " class="rounded-circle"/>-->
									Categories<span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" style="padding: 10px; background-color:#000000; height:fit-content; color:white;  font-weight:600; width:200px;">
								  <?php
								  while($catarray = mysqli_fetch_array($catquery)){
								  ?>
									<a style="display:block; padding:15px; margin: 20px 0px; color:white; text-decoration:none;"  href="list_page.php?list=<?php echo $catarray ['cat_id'];?>"><?php echo $catarray['name'];?></a>
									<?php
								  }?>
								  </ul>
								   <ul class="dropdown-menu">
									2
								  </ul>
			  <li ><a href="bottle.php" class="an">Home</a></li>
              <li><a href="cart.php?cart=<?php echo $userinfo['user_id'];?>" class="an">Cart</a></li>
			   <li><a href="" class="an">About</a></li>
             					 
			<?php 			
			if(isset($_SESSION['bottle'])){
			?>			 
 <div class="btn-group" style="">
								  <button class="btn btn-default btn-sm dropdown-toggle " type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="    color: rgb(255, 255, 255); font-weight: 600;text-transform: capitalize; margin-top: 10px top: -9px;">
									<!--<img src="admin/img/userphoto/<?php echo $userinfo['photo']?>" style=" width: 35px; height: 35px; " class="rounded-circle"/>-->
									<?php echo $userinfo['name']?><span class="caret"></span>
								  </button>
								  <ul class="dropdown-menu" style="padding: 10px; border: 2px solid darkslategrey; background-color:red;">
									<a style="display:block;" href="profile.php?profile=<?php echo $userinfo['id'];?>"><i class="fa-solid fa-user" style="    margin-right: 10px; color: orange;" ></i>Profile</a>
									<a style="display:block;" href="dashboard.php?dashboard=<?php echo $userinfo['id']?>"><i class="fa-solid fa-table-columns" style="    margin-right: 10px;color: blueviolet;"></i>Dashboard</a>
									<a style="display:block;"><i class="fa-solid fa-file-invoice-dollar"style="    margin-right: 10px; color: green;"></i>Payment</a>
									<a style="display:block;" href="logout.php"><i class="fa-solid fa-right-from-bracket" style="    margin-right: 10px; color: red;"></i>Log Out</a>
								  </ul>
								   <ul class="dropdown-menu">
									2
								  </ul>
								</div>
				<?php
				}else{
				?>
 <li> <a href="winesign.php"><svg xmlns="http://www.w3.org/2000/svg" style="color:white;" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a></li>
			<?php
				}
			?>		
			 <li><a href="dashboard.php" class="an">Dashboard</a></li>	
							 
							 
							


             
             
            </ul>
          </nav>
        </div>