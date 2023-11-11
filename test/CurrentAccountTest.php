<?php
use PHPUnit\Framework\TestCase;

require_once '../src/currentaccount.php';

class CurrentAccountTest extends TestCase {

    public function testInitialization() {
        $currentAccount = new CurrentAccount('987654321', 2000, '2023-01-01', 0.02);

        $this->assertEquals('987654321', $currentAccount->accountNumber);
        $this->assertEquals(2000, $currentAccount->balance);
        $this->assertEquals('2023-01-01', $currentAccount->dateofOpening);
        $this->assertEquals(0.02, $currentAccount->interestRate);
    }

    public function testInheritance() {
        $currentAccount = new CurrentAccount('987654321', 2000, '2023-01-01', 0.02);

        // Check if it's an instance of both CurrentAccount and Account
        $this->assertInstanceOf(CurrentAccount::class, $currentAccount);
        $this->assertInstanceOf(Account::class, $currentAccount);
    }
}

?>