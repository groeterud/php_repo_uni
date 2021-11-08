<?php
	//session_start();
	include("auth.php");
	if(isset($_POST["submit_order"]))
	{
		
		$tireqty = $_POST['tireqty'];
		$oilqty = $_POST['oilqty'];
		$sparkqty = $_POST['sparkqty'];
		
		$totalqty = 0;
		$totalqty = $tireqty + $oilqty + $sparkqty;
		
			
		define('TIREPRICE', 100);
		define('OILPRICE', 10);
		define('SPARKPRICE', 4);
		
		$subtotalamount = $tireqty * TIREPRICE + $oilqty * OILPRICE + $sparkqty * SPARKPRICE;
		$taxrate = 0.10;  // local sales tax is 10%
		$totalamount = $subtotalamount * (1 + $taxrate);
				
		$discount = 0;
		$grandtotalamount= 0;
		
		if (($tireqty>=10)&&($tireqty<=49)){
			$discount=$subtotalamount*0.05;
			$grandtotalamount= $totalamount - $discount;
		}
		elseif (($tireqty>=50)&&($tireqty<=99)){
			$discount=$subtotalamount*0.10;
			$grandtotalamount= $totalamount - $discount;
		}
		elseif ($tireqty>=100){
			$discount=$subtotalamount*0.15;
			$grandtotalamount= $totalamount - $discount;
		}
		else {
			$grandtotalamount= $totalamount;
		}
		//new snipped ends here
		echo "<p> Your order is as follows: </p>";	
			echo htmlspecialchars ($tireqty)." tires <br>";
			echo htmlspecialchars ($oilqty)." bottles of oil <br>";
			echo htmlspecialchars ($sparkqty)." spark plugs <br>";
			
			echo "<p> Your Bill: </p>";	
			//new snipped starts here 
			echo "Items ordered: ".$totalqty."<br>";
			echo "Subtotal: $".number_format($subtotalamount,2)."<br>";
			echo "Total including tax: $".number_format($totalamount,2)."<br>";
			echo "Achieved discount: $".number_format($discount,2)."<br>";
			echo "Grand Total: $".number_format($grandtotalamount,2)."<br>";
			
		$orderdate= date("H:i, jS F Y");
		$user= $_SESSION['username'];
		$dbc= mysqli_connect("localhost","root","","demo");
		$query= "INSERT INTO userid_order (UID, tireqty, oilqty, sparkqty, amount, date) VALUES('$user','$tireqty', '$oilqty', '$sparkqty', '$grandtotalamount', '$orderdate')";
		$result = mysqli_query($dbc,$query);
		
		if($result){
			echo "<div> <h3>Order is successfully placed. Thanks a lot</h3>
			<br/><a href='OrderForm.php'>Order More</a>
			<a href='logout.php'>Log Out</a>
			<!--<a href='show-order.php'>Show</a> -->
			</div>";
		}
		else{
			echo "Processing error.....";
		}
	}
	
	else{
		$type_error_message = 'Please enter valid type of data for the number of Tires';
	}
			
?>