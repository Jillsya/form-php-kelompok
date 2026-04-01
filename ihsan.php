<?php
include 'proses.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
    <style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: linear-gradient(120deg, #667eea, #764ba2);
        margin: 0;
        padding: 0;
        text-align: center;
    }

    h2 {
        margin-top: 40px;
        color: white;
        letter-spacing: 1px;
    }

    .container {
        width: 380px;
        margin: 30px auto;
        background: #ffffff;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        transition: 0.3s;
    }

    .container:hover {
        transform: translateY(-5px);
    }

    input, textarea {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        border: 1px solid #ddd;
        border-radius: 8px;
        outline: none;
        transition: 0.2s;
        font-size: 14px;
    }

    input:focus, textarea:focus {
        border-color: #667eea;
        box-shadow: 0 0 5px rgba(102,126,234,0.5);
    }

    textarea {
        resize: none;
        height: 80px;
    }

    button {
        width: 100%;
        padding: 12px;
        margin-top: 10px;
        background: linear-gradient(120deg, #667eea, #764ba2);
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        opacity: 0.9;
        transform: scale(1.02);
    }

    .hasil {
        margin-top: 20px;
        text-align: left;
        background: #f9f9f9;
        padding: 15px;
        border-radius: 10px;
        border-left: 5px solid #667eea;
        font-size: 14px;
    }
</style>
</head>
<body>

<h2>Membuat Form Sederhana</h2>

<div class="container">
    <form method="POST">
        <input type="text" name="firstName" placeholder="Firstname" required><br>
        <input type="text" name="lastName" placeholder="Lastname" required><br>
        <input type="text" name="phone" placeholder="Phone Number" required><br>
        <textarea name="address" placeholder="Address" required></textarea><br>
        <button type="submit">Submit</button>
    </form>

    <div class="hasil">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = new DataDiri(
                $_POST['firstName'],
                $_POST['lastName'],
                $_POST['phone'],
                $_POST['address']
            );

            echo $data->tampilkan();
        }
        ?>
    </div>
</div>

</body>
</html>