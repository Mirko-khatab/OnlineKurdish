<?php
include 'partials/_dbconnect.php';
if(isset($_POST['submit'])){
	  
       $Uname = mysqli_real_escape_string($conn,$_POST['name']);
         $Uemail = mysqli_real_escape_string($conn,$_POST['email']);
	      $Uphone =mysqli_real_escape_string($conn,$_POST['phone']);
    $Ucity = mysqli_real_escape_string($conn,$_POST['city']);
	   $Uaddress = mysqli_real_escape_string($conn,$_POST['address']);
    $Ugender = mysqli_real_escape_string($conn,$_POST['gender']);
	$Ucardnum = mysqli_real_escape_string($conn,$_POST['cardnum']);
	$Uorder = mysqli_real_escape_string($conn,$_POST['order']);
	$Utypestyle = mysqli_real_escape_string($conn,$_POST['typestyle']);
	$Usshan =mysqli_real_escape_string($conn,$_POST['sshan']);
	$Upball =mysqli_real_escape_string($conn,$_POST['pball']);
	$Ussng = mysqli_real_escape_string($conn,$_POST['ssng']);
	$Usqol =mysqli_real_escape_string($conn,$_POST['sqol']);
	$Usbala =mysqli_real_escape_string($conn,$_POST['sbala']);
 
		$sql="INSERT INTO `tailor`(`Name`, `Email`, `Phone`, `City`, `Address`, `Gender`, `Numcard`, `Noteorder`, `Typestyle`, `Qyasishan`, `Panibal`, `Qyasisng`, `Drezhiqol`, `Drezhibla`) VALUES ('$Uname','$Uemail','$Uphone','$Ucity','$Uaddress','$Ugender','$Ucardnum' ,'$Uorder','$Utypestyle','$Usshan','$Upball','$Ussng','$Usqol','$Usbala')";
		if(mysqli_query($conn,$sql)){
			echo "your admin added";
		}
		else{
			echo "error";
		}
	}
	




	

	   
	   
	 
	   
?>

	
	<body>
<div class="modal fade" id="m1">
	<div class="modal-dialog modal-md">
	<div class="modal-content">
		<div class="modal-header">
			<h3 class="modal-tittle">Detail</h3>
			<button type="button" class="close" data-dismiss="modal">
				&times;
			</button>
		</div>
		<div class="modal-body">
		<div class="container">
			<div class="row">
			<div class="col-md-6">
				<h3>Buy Tailor</h3><br>
				
			<form   class="text-success"method="post"action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>">
					<div class="form-group">
				<label>Full Name</label>
					<input type="text" name="name" alt="name" class="form-control">
					</div>
				<div class="form-group">
				<label>Email</label>
					<input type="email" name="email" alt="email" class="form-control">
					</div>
				<div class="form-group">
				<label>Phone Number</label>
					<input type="tel" name="phone" alt="phone" class="form-control">
					</div>
				<div class="form-group">
				<label>City</label>
					<input type="text" name="city" alt="city" class="form-control">
					</div>
				<div class="form-group">
				<label>Address</label>
					<input type="text" name="address" alt="address" class="form-control">
					</div>
				<div class="form-group">
				<label>Gender</label><br>
					<input type="radio" name="gender" value="Female">Female<i class="fa fa-female" aria-hidden="true" class="form-control"></i>
					<input type="radio" name="gender" value="Male">Male<i class="fa fa-male" aria-hidden="true"></i>
					</div>
				
				
			    <div class="form-group">
				<label>Payment Card Number</label>
					<input type="text" name="cardnum" alt="cardnum" class="form-control">
					</div>
					  
					 <div class="form-group">
				<label>Order Notes</label>
					<textarea name="order"  class="form-control mb-2" placeholder="Notes about your order, eg. special notes for delivary"></textarea>
					</div>
				   <div class="form-group">
				<label>Kurdish Clothes Style</label><br>
						<input type="checkbox" name="typestyle" value="Swltan Style">&nbsp;Swltan Style
					   <input type="checkbox" name="typestyle" value="Old Style">&nbsp;Old Style
					   <input type="checkbox" name="typestyle" value="Classic Style ">&nbsp;Classic Style
					   <input type="checkbox" name="typestyle" value="Sulaimani Style ">&nbsp;Sulaimani Style
					   <input type="checkbox" name="typestyle" value="Hawler Style ">&nbsp;Hawler Style
					</div>
				<br>
				<h5>Size Clothes</h5>
				 <div class="form-group">
				<label>Qyasi Shan</label>
					<input type="double" name="sshan" alt="sshan" class="form-control">
					</div>
				 <div class="form-group">
				<label>Pani Ball</label>
					<input type="double" name="pball" alt="sshan" class="form-control">
					</div>
				 <div class="form-group">
				<label>Qyasi Sng</label>
					<input type="double" name="ssng" alt="sshan" class="form-control">
					</div>
				 <div class="form-group">
				<label>Drezhi Qol</label>
					<input type="double" name="sqol" alt="sshan" class="form-control">
					</div>
				 <div class="form-group">
				<label>Drezhi Balla</label>
					<input type="double" name="sbala" alt="sshan" class="form-control">
					</div>
				
		<button type="submit" name="submit"  value="submit"class="btn btn-success">Buy Tailor</button>
				</form>
			
			</div>
			</div>
		</div>
	
		</div>
		<div class="modal-footer">
			
			<button type="button" class="btn btn-dark" data-dismiss="modal">close</button>
		
		</div>
		
		</div>
	</div>
</div>
</body>