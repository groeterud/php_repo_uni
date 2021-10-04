<!--
<!DOCTYPE html>

<html>
  <head>
    <title>Bob's Auto Parts - Order Results</title>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>	
    
	<?php
		#echo "<p>Order processed.</p>";
	?>
  </body>
</html>

-->



<?php

  // create short variable names

  $tireqty = $_GET['tireqty'];

  $oilqty = $_GET['oilqty'];

  $sparkqty = $_GET['sparkqty'];

?> 



<!DOCTYPE html>

<html>
  <head>
    <title>Bob's Auto Parts - Order Results</title>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>	
	<?php
		echo "<p> Your order is as follows: </p>";
		echo htmlspecialchars ($tireqty)." tires <br>";
		echo htmlspecialchars ($oilqty)." bottles of oil <br>";
		echo htmlspecialchars ($sparkqty)." spark plugs <br>";
		echo "<p>Order processed at " .date("H:i, jS F Y")."</p>";
	?>
	
  </body>
</html>





	<a href="./Confirmation.php">
		<input type="submit" value="OK" />
	</a>
	



