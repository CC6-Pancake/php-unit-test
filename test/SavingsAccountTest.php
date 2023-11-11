<?php
use PHPUnit\Framework\TestCase;

require_once '../src/savingsaccount.php';

class SavingsAccountTest extends TestCase {

    public function testInitialization() {
        $savingsAccount = new SavingsAccount('987654321', 2000, '2023-01-01', 500);

        $this->assertEquals('987654321', $savingsAccount->accountNumber);
        $this->assertEquals(2000, $savingsAccount->balance);
        $this->assertEquals('2023-01-01', $savingsAccount->dateofOpening);
        $this->assertEquals(500, $savingsAccount->minBalance);
    }

    public function testInheritance() {
        $savingsAccount = new SavingsAccount('987654321', 2000, '2023-01-01', 500);

        // Check if it's an instance of both SavingsAccount and Account
        $this->assertInstanceOf(SavingsAccount::class, $savingsAccount);
        $this->assertInstanceOf(Account::class, $savingsAccount);
    }
}

?>