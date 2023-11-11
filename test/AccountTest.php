<?php
use PHPUnit\Framework\TestCase;

require_once '../src/account.php';

class AccountTest extends TestCase {

    public function testInitialization() {
        $account = new Account('123456789', 1000, '2023-01-01');

        $this->assertEquals('123456789', $account->accountNumber);
        $this->assertEquals(1000, $account->balance);
        $this->assertEquals('2023-01-01', $account->dateofOpening);
    }

    public function testDebitAmount() {
        $account = new Account('123456789', 1000, '2023-01-01');

        // Test valid debit
        $account->debit_amount(500);
        $this->assertEquals(500, $account->balance);

        // Test invalid debit amount
        $this->expectOutputString('Invalid debit amount or insufficient balance.');
        $account->debit_amount(1000);
    }

    public function testCreditAmount() {
        $account = new Account('123456789', 1000, '2023-01-01');

        // Test valid credit
        $account->credit_amount(500);
        $this->assertEquals(1500, $account->balance);

        // Test invalid credit amount
        $this->expectOutputString('Invalid credit amount.');
        $account->credit_amount(-100);
    }
}

?>