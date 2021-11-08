<?php
	include("auth.php");
?>
<!doctype html>
<html>	
	<head>
		<title>
			Bob's Auto Parts - Order Form
		</title>
		<script type="text/javascript">
			function validate()
			{
			 var error="";
			 var tqty = document.getElementById( "tireqty" );
			 if( tqty.value == "" || isNaN(tqty.value))
			 {
			  error = " You have to write 0 or the tire quantity. ";
			  document.getElementById( "error_para" ).innerHTML = error;
			  return false;
			 }
			 var oqty = document.getElementById( "oilqty" );
			 if( oqty.value == "" || isNaN(oqty.value))
			 {
			  error = " You have to write 0 or the oil quantity. ";
			  document.getElementById( "error_para" ).innerHTML = error;
			  return false;
			 }
			 var sqty = document.getElementById( "sparkqty" );
			 if( sqty.value == "" || isNaN(sqty.value))
			 {
			  error = " You have to write 0 or the spark quantity. ";
			  document.getElementById( "error_para" ).innerHTML = error;
			  return false;
			 }
			}
		</script>
	</head>
	<body>
		<h1>Please order your purchase here</h1>		
		<form action="getdata-order.php" method="post" onsubmit="return validate();">	
		    <table style="border: 0px;">
			    <tr style="background: #cccccc;">
				     <td style="width: 150px; text-align: center;">Item</td>
				     <td style="width: 15px; text-align: center;">Quantity</td>
			    </tr>
			    <tr>
				     <td>Tires</td>
				     <td><input type="text" name="tireqty" id="tireqty" size="5" maxlength="3" /></td>
			    </tr>
			    <tr>
				     <td>Oil</td>
				     <td><input type="text" name="oilqty" id="oilqty" size="5" maxlength="3" value=""/></td>
			    </tr>
			    <tr>
				     <td>Spark Plugs</td>
				     <td><input type="text" name="sparkqty" id="sparkqty" size="5" maxlength="3" /></td>
			    </tr>			
			    <tr>
			          <td colspan="2" style="text-align: center; float: right; margin-top: 0.5em;">
						<input type="submit" name="submit_order" value="Submit Order" />
						<a href="logout.php">Logout</a>
					</td>
			    </tr>
		    </table>
    	</form>
		<p id="error_para" ></p>
	</body>
</html>


