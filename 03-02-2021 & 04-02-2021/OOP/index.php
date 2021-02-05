<?php
class BankAccount{
	private $balance = 1000;
	public function displayBalance()
	{
		return "Your current balance is: ".$this->balance;
	}

	public function withdraw($amount)
	{
		if($amount <= $this->balance){
			$this->balance = $this->balance-$amount;
		}else{
			echo "Not enough balance for withdraw.<br>";
		}
	}

	public function deposite($amount)
	{
		$this->balance += $amount;
	}
}

class SavingAccount extends BankAccount{

}

$obj = new BankAccount;
$obj->withdraw(500);
$obj->deposite(5000);
// echo $obj->$balance;
echo $obj->displayBalance();