<?php
class DataDiri {
    public $firstName;
    public $lastName;
    public $phone;
    public $address;

    public function __construct($firstName, $lastName, $phone, $address) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function tampilkan() {
        return "
        <div class='output'>
            <p>Hi, my name is <b>{$this->firstName} {$this->lastName}</b></p>
            <p>Phone Number : {$this->phone}</p>
            <p>Address : {$this->address}</p>
        </div>
        ";
    }
}
?>
