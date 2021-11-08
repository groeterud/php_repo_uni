<?php
	//include auth.php file on all secure pages
	include("auth.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Welcome Home</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<div class="form">
			<p>Welcome to Bob Auto Parts <?php echo $_SESSION['username']; ?>!</p>
			<p>This is secure area.</p>
			<p>Please place your order <a href="OrderForm.php">Here</a>.</p>
			<a href="logout.php">Logout</a>
		</div>
	</body>
</html>