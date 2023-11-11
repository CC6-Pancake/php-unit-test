<?php
use PHPUnit\Framework\TestCase;

require_once '../src/customer.php';

class CustomerTest extends TestCase {

    public function testDisplayInfo() {
        $customer = new Customer(1, 'John Doe', '123 Main St', '555-1234');

        $expectedOutput = "Customer ID: 1\nName: John Doe\nAddress: 123 Main St\nPhone: 555-1234\n";

        $actualOutput = $customer->display_info();
        $this->assertSame($expectedOutput, $actualOutput, 'Strings do not match');

    }

    public function testAccessors() {
        $customer = new Customer(1, 'John Doe', '123 Main St', '555-1234');

        $this->assertEquals(1, $customer->customerId);
        $this->assertEquals('John Doe', $customer->name);
        $this->assertEquals('123 Main St', $customer->address);
        $this->assertEquals('555-1234', $customer->phone);
    }
}
?>