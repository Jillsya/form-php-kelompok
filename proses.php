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

if (
    $_SERVER["REQUEST_METHOD"] === "POST" &&
    isset($_POST['firstName'], $_POST['lastName'], $_POST['phone'], $_POST['address'])
) {
    $data = new DataDiri(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['phone'],
        $_POST['address']
    );

    echo '<!DOCTYPE html><html><head><title>Hasil Form</title><style>body{font-family:Arial;background:aqua;text-align:center;} .container{width:400px;margin:50px auto;background:white;padding:20px;border-radius:10px;box-shadow:0 0 10px rgba(0,0,0,0.1);} .output{text-align:left;}</style></head><body>';
    echo '<div class="container">';
    echo '<h2>Hasil Input</h2>';
    echo $data->tampilkan();
    echo '<a href="index.php">Kembali</a>';
    echo '</div></body></html>';
} else {
    header('Location: index.php');
    exit;
}
?>