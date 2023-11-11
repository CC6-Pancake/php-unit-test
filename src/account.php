<?php
class Account{
    public $accountNumber;
    public $balance;
    public $dateofOpening;

    public function __construct($accountNumber, $balance, $dateofOpening){
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
        $this->dateofOpening = $dateofOpening;

    }

    public function debit_amount($amount){
        if ($amount > 0 and $amount <= $this->balance){
            $this->balance -= $amount;
        } else {
            echo "Invalid debit amount or insufficient balance.";
        }
    }

    public function credit_amount($amount){
        if ($amount > 0) {
            $this->balance += $amount;
        } else{
            echo "Invalid credit amount.";
        }
    }
}
?>