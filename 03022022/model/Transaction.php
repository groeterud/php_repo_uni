<?php
	
	class Transaction {
		public $id;
		public $amount;
		public $cardType;
		public $last4;
		
		public function __construct($id,$amount, $cardType, $last4)  
		{  
			$this->id = $id;            
			$this->amount = $amount;
			$this->cardType = $cardType;
			$this->last4 = $last4;
		} 
	}

?>



