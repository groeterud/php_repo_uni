<html>
	<head></head>

	<body>

	<table>
		<tr><td>Id</td><td>Amount</td><td>Card Type</td><td>Last 4</td></tr>
		<?php 

			foreach ($transactions as $id => $transaction)
			{
				echo '<tr><td><a href="transaction_index.php?transaction='.$transaction->id.'">'.$transaction->id.'</a></td><td>'.$transaction->amount.'</td><td>'.$transaction->cardType.'</td><td>'.$transaction->last4.'</td></tr>';
			}

		?>
	</table>

	</body>
</html>

