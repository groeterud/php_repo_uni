<?php
	include_once("model/transactionModel.php");
	class Controller {
		public $model;
		
		public function __construct()  
		{  
			$this->model = new Model();

		} 
		public function invoke()
		{
			if (!isset($_GET['transaction']) || empty($_GET['transaction']))
			{
				//list of all available transactions

				$transactions = $this->model->getTransactionList();
				include 'view/transactionlist.php';
			}
			else
			{
				// only the requested transaction			
				$transaction = $this->model->getTransaction($_GET['transaction']);
				include 'view/viewtransaction.php';
			}
		}
	}
?>

