<?php
class User {
    public $nama;
    public $hp;
    public $alamat;

    function tampilkan() {
        return "Nama: $this->nama <br> HP: $this->hp <br> Alamat: $this->alamat";
    }
}
?>
