<?php
	include_once("model/Transaction.php");
	class Model {
		public function getTransactionList()
		{
			// Sample data
			return array(
				"1" => new Transaction("1","14.95", "VISA", "8564"),
				"2" => new Transaction("2","9.95", "MASTERCARD", "4100"),
				"3" => new Transaction("3","89.95", "AMEX", "8105")
			);
		}
		public function getTransaction($id)
		{
		// get all the transactions 
		// usually this will be done in a database with a select command
			$allTransactions = $this->getTransactionList();
			return $allTransactions[$id];
		}

	}
?>



