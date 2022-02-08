<html>
	<head></head>
	<body>
		<?php 
			echo 'Id:        ' . $transaction->id. '<br/>';
			echo 'Amount:    ' . $transaction->amount. '<br/>';
			echo 'Card Type: ' . $transaction->cardType. '<br/>';
			echo 'Last 4:    ' . $transaction->last4. '<br/>';
		?>
	</body>
</html>
