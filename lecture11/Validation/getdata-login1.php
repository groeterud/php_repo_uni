<?php
	session_start();
	 
	$name = trim(strip_tags($_POST['username']));
	$password = trim(strip_tags($_POST['user_password']));

	$host = 'localhost';
	$user = 'root';
	$pass = '';

	$dbc=mysqli_connect($host, $user, $pass, "demo");
		
	if(isset($_POST["submit_form"]))
	{		 
		$query = "SELECT * FROM user_data WHERE username='$name'and password='$password'";
		$result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
		$rows = mysqli_num_rows($result);
		if($rows==1){
			$_SESSION['username'] = $name;
				// Redirect user to index.php
			header("Location: index.php");
		}
		else{						
			echo "<div class='form'>
					<h3>Username/password is incorrect.</h3>
					<br/>Click here to <a href='login.php'>Login</a>
				</div>";
		}	 
	}	
	
	if(isset($_POST["view_order"]))
	{			
		$query = "SELECT * FROM userid_order WHERE UID='$name'";
		$result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
		$r = mysqli_num_rows($result);
		if($r==1){	
			echo "<p>Welcome ".$name.". Your order detail is as follows:</p>";
			while($row=mysqli_fetch_array($result)){
				echo "<p><h3>User ID: {$row['UID']}</h3><h3>Tire Quantity: {$row['tireqty']}</h3><h3>Oil Quantity: {$row['oilqty']}</h3>
				<h3>Spark Quantity: {$row['sparkqty']}</h3><h3>Total Cost: {$row['amount']}</h3><h3>Order Made: {$row['date']}</h3></p>";
			}
			echo "<div> <a href='logout.php'>Log Out</a></div>";
		}
		else{						
			echo "<div>
					<h3>Username/password is incorrect or there is no order for you.</h3>
					<br/>Please click here to <a href='login.php'>Login</a>. Or
					<br/>Please click here to make your <a href='OrderForm.php'>Order</a>.
				</div>";				
		} 
	}
	
?>