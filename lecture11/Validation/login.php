<html>
	<head>
		<title>Log In</title>
		<link rel="stylesheet" href="style.css" />
		<script type="text/javascript">
			function validate()
			{
			 var error="";
			 var name = document.getElementById( "name_of_user" );
			 if( name.value == "" )
			 {
			  error = " You Have To Write Your Name. ";
			  document.getElementById( "error_para" ).innerHTML = error;
			  return false;
			 }

			 var password = document.getElementById( "password_of_user" );
			 if( password.value == "" || password.value.length < 4 )
			 {
			  error = " Password Must Be More Than Or Equal To 4 Digits. ";
			  document.getElementById( "error_para" ).innerHTML = error;
			  return false;
			 }

			 else
			 {
			  return true;
			 }
			}
		</script>
	</head>
	<body>
		<div class="form">
			<h1>Please Log in here</h1>	
			<form method="POST" action="getdata-login1.php" onsubmit="return validate();">
				<input type="text" name="username" placeholder="Username" id="name_of_user">
				<input type="password" name="user_password" placeholder="Password" id="password_of_user">
				<input type="submit" name="submit_form" value="Submit">
				<input type="submit" value="Show Order" name="view_order">
				<!---->
			</form>
		
		<p id="error_para" ></p>
		
		</div>

	</body>
</html>