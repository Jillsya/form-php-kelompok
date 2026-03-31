<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
</head>
<body>

<h2>Form Input</h2>

<form method="POST">
    Nama: <input type="text" name="nama"><br><br>
    No HP: <input type="text" name="hp"><br><br>
    Alamat: <textarea name="alamat"></textarea><br><br>
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $hp = $_POST['hp'];
    $alamat = $_POST['alamat'];

    echo "<h3>Hasil Input:</h3>";
    echo "Nama: $nama <br>";
    echo "HP: $hp <br>";
    echo "Alamat: $alamat <br>";
}
?>

</body>
</html>
