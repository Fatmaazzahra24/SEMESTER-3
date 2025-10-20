<!DOCTYPE html>
<html>
<head>
    <title>Form Input Aman PHP</title>
</head>
<body>

<h2>Form Input Aman PHP</h2>

<form method="post" action="">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>

    <input type="submit" value="Kirim">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil data input
    $InputNama = $_POST['nama'];
    $InputEmail = $_POST['email'];

    // Bersihkan karakter berbahaya
    $nama = htmlspecialchars($InputNama, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($InputEmail, ENT_QUOTES, 'UTF-8');

    // Periksa apakah email valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3>Data berhasil diproses!</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email;
    } else {
        echo "<h3 style='color:red;'>Email tidak valid!</h3>";
    }
}
?>
</body>
</html>
