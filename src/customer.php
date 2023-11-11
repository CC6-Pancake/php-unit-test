<?php
class Customer{
    public $customerId;
    public $name;
    public $address;
    public $phone;

    public function __construct($customerId, $name, $address, $phone){
        $this->customerId = $customerId;
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function display_info(){
        return "Customer ID: {$this->customerId}\nName: {$this->name}\nAddress: {$this->address}\nPhone: {$this->phone}\n";
    }
}

?>