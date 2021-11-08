<?php
	if(isset($_POST["submit_form"]))
	{/*
	 validate_data($data)
	 {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = strip_tags($data);
	  $data = htmlspecialchars($data);
	  $data = mysqli_real_escape_string($data);
	  return $data;    
	 }*/
	 
	 $name = trim(strip_tags($_POST['username']));//validate_data( $_POST['username'] );
	 $password = trim(strip_tags($_POST['user_password']));//validate_data( $_POST['user_password'] );

	 $host = 'localhost';
	 $user = 'root';
	 $pass = '';

	 $dbc=mysqli_connect($host, $user, $pass, "demo");
	 
	 //mysql_select_db('demo');

	 $userdata="SELECT * FROM user_data WHERE username='$name' AND password='$password'";
	 
	 $result = mysqli_query($dbc, $userdata);
     $rows = mysqli_num_rows($result);
		if($rows==1){
			echo "<div class='form'> <h3>You have successfully logged in.</h3>
			<br/>Click here to <a href='show_order.php'>Show order</a></div>";
		}
		else{
			echo "<div class='form'> <h3>User info not found</h3>
			<br/>Click here to <a href='login.php'>try again</a>.</div>";
		}
	}
	
?>