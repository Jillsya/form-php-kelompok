<!DOCTYPE html>
<html>
<head>
    <title>Form Sederhana</title>
    <style>
        body {
            font-family: Arial;
            background: aqua;
            text-align: center;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, textarea {
            width: 90%;
            padding: 10px;
            margin: 5px 0;
        }
        button {
            padding: 10px 20px;
            background: blue;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .hasil {
            margin-top: 20px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Membuat Form Sederhana</h2>
<div class="container">
    <form method="POST" action="proses.php">
        <input type="text" name="firstName" placeholder="Firstname" required><br>
        <input type="text" name="lastName" placeholder="Lastname" required><br>
        <input type="text" name="phone" placeholder="Phone Number" required><br>
        <textarea name="address" placeholder="Address" required></textarea><br>
        <button type="submit">Submit</button>
    </form>

        <div class="hasil">
        <!-- Hasil ditampilkan di proses.php setelah submit -->
    </div>
</div>

</body>
</html>