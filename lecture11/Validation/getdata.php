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
	 $emailid = trim(strip_tags($_POST['useremail']));//validate_data( $_POST['useremail'] );
	 $password = trim(strip_tags($_POST['user_password']));//validate_data( $_POST['user_password'] );

	 $host = 'localhost';
	 $user = 'root';
	 $pass = '';

	 $dbc=mysqli_connect($host, $user, $pass, "demo");
	 
	 //mysql_select_db('demo');

	 $insertdata="INSERT INTO user_data (username, useremail, password) VALUES('$name','$emailid','$password')";
	 
	 $result = mysqli_query($dbc, $insertdata);
		if($result){
			echo "<div class='form'> <h3>You are registered successfully.</h3>
			<br/>Click here to <a href='login.php'>Login</a></div>";
		}
		else{
			echo "<div class='form'> <h3>User name exists already. Please choose a new user name.</h3>
			<br/>Click here to <a href='registration.php'>try again</a>.</div>";
		}
	}
	
?>