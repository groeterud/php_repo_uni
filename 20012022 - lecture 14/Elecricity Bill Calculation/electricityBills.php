<!DOCTYPE html>
<html>

	<head>
		<title>Electricity Bill Calculation</title>
	</head>

	<?php
	require('bill_calculation.php');
	
	$result_str = $result = '';
	if (isset($_POST['unit-submit'])) {
		$units = $_POST['units'];
		try {
			if(empty($units)) {
				throw new Exception("No input, please verify and try again");
			}
			else {
				$result = calculate_bill($units);
				$result_str = 'Total amount of cost is ' . $result.' NOK '. 'for ' .$units . ' units of electricity usage';
			}
		}
		catch (Exception $e) {
			$result_str = 'Error: '.$e->getMessage();
		}
			
		}	
	?>

	<body>
		
		<div id="page-wrap">
			<h1>Electricity Bill Calculation</h1>

			<form action="" method="post" id="quiz-form">
					<input type="number" name="units" id="units" placeholder="Please enter total unit" />
					<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
			</form>

			<div>
				<?php echo '<br />' . $result_str; ?>
			</div>
		</div>
	</body>
</html>