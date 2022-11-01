<?php

include 'admin/config/conn.php';

$vv =2;

$sql ="select * from product ";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);




   if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        // $sql = "SELECT * FROM product WHERE name LIKE '%$searchKey%'OR price LIKE '%$searchKey%' or p_id LIKE '%$searchKey%'";
		 $sql = "SELECT * FROM product WHERE name LIKE '%$searchKey%'";
     }else{
		$sql = "SELECT * FROM product";
	}
	$result=mysqli_query($conn,$sql);
	//print_r($result);







// $country = array('A','B','C','D');
// $cap = array(1,2,5,6);


// $merged = array_merge($country, $cap);
// shuffle($merged);
// print_r($merged);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">


</head>
<body>

<div class="container">
<form action="" method="GET">
					  <input placeholder="Try Sarees,Kurti or Search By Product" name="search"  class="naavvv"  value="<?php echo isset($_GET['search']) ? @$_GET['search'] : ""; ?>">
					  <!-- <button class="btn btn-secondary" style=" padding: 15px 15px 10px 16px;">Search</button>
					  
					  isset me ? se pehle jo $_GET h wo search me value likhe p jo search ho kr aayega uske liye h nhi to ? ke baad jo @$_GET h usmw sara data aayega-->
</form>
</div>



<div class="container">
	<div class="row">
		<div class="col-2"><label id ="lb">Enter Roll no.</label><input   maxlength="10"  type="text" class="no" name="rollno" id="roll"></div>
		<div class="col-2"><label>Enter Name</label><input   type="text" class="no" name="rollno" id="name"></div>
		<div class="col-2"><label>English</label><input type="number"  maxlength="3" pattern="[0-9]{10}" type="text" class="no" name="rollno" id="eng"></div>
		<div class="col-2"><label>Maths</label><input type="number"   maxlength="3" pattern="[0-9]{10}"  type="text" class="no" name="rollno" id="math"></div>
		<div class="col-2"><label>Hindi</label><input type="number"  maxlength="3" pattern="[0-9]{10}"   type="text" class="no" name="rollno" id="hindi"></div>
		<div class="col-2"><label>Science</label><input type="number"  maxlength="3" pattern="[0-9]{10}"   type="text" class="no" name="rollno" id="science"></div>
		<div class="col-2"><label>Politic</label><input type="number" maxlength="3" pattern="[0-9]{10}"   type="text" class="no" name="rollno" id="politic"></div>
		<div class="col-2"><label>Submit</label><br><input  maxlength="3" pattern="[0-9]{10}"  type="submit" id="bt"></div>

	</div>
</div>


 
 <div class="row">
	
 </div>

  
  <script src="js/jquery.slim.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
	$("#bt").click(function(){
		var roll =$("#roll").val();
		var name =$("#name").val();
		var eng = $("#eng").val();
		var hindi = $("#hindi").val();
		var math = $("#math").val();
		var science = $("#science").val();
		var politic = $("#politic").val();
		var total =  parseInt(eng) + parseInt(hindi) + parseInt(math) + parseInt(science) + parseInt(politic);	
		var per = (total/500)*100;
		
		var percent =parseFloat(per).toFixed(1);
		
		var cgpa = (per/9.5);
		
		var fixedNum = parseFloat(cgpa).toFixed( 1 );
		
		//console.log(fixedNum);
		//console.log(cgpa);
		
		if(per >= 75)
		{
			var grade = "A+";
		}else if(per>= 60 && per<75)
		{
			var grade = "A";
		}else if(per >= 50 && per <60)
		{
			var grade = "B";
		}else if(per >= 33 && per <50)
		{
			var grade = "C";
		}else{
			var grade ="Fail";
		}
		
		//console.log('grade' + grade);
		// console.log(roll)
		// console.log(name)
		// console.log(mark1)
		// console.log(mark2)
		// console.log(mark3)
		//console.log('total' + total)
		//console.log('Percentage' + per)
		
		//var app = $("#lb").append(per);
		
		// for(var i =0; i<=eng.length; i++){
			// console.log(i*eng);
		// }
		
		var obj={
			name:name,
			roll:roll,
			eng:eng,
			math,math,
			hindi:hindi,
			science:science,
			politic:politic,
			total:total,
			percent:percent,
			cgpa:fixedNum,
			grade:grade,
		}
		
		
		console.table(obj);
		
		$.ajax({
			url:"admin/ajax/sort.php",
			type:'POST',
			data:obj,
			success:function(resp){
				if(resp == 11){
					$("#name").val('');
					$("#roll").val('');
					$("#eng").val('');
					$("#hindi").val('');
					$("#math").val('');
					$("#science").val('');
					$("#politic").val('');
				}else if(resp ==2){
					alert('Data not Submit');
				}
			}
		});
		
		
	});
	
	

	
	
	
	
});
</script>
</body>
</html>