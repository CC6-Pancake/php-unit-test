<?php
require_once('account.php');

class SavingsAccount extends Account {
    public $minBalance;
    
    public function __construct($accountNumber, $balance, $dateofOpening, $minBalance){
        account::__construct();
        $this->minBalance = $minBalance;

    }
    
}

?>