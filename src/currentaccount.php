<?php
require_once('account.php');

class CurrentAccount extends Account {
    public $interestRate;

    public function __construct($accountNumber, $balance, $dateofOpening, $interestRate){
        account::__construct($accountNumber, $balance, $dateofOpening);
        $this->interestRate = $interestRate;

    }
    
}

?>