<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $buah = $_POST['buah'];
    $warna = isset($_POST['warna']) ? $_POST['warna'] : [];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $password = $_POST['password'];

    // 🔹 Validasi password di sisi server (PHP)
    if (strlen($password) < 8) {
        echo "<p style='color:red;'>Password terlalu pendek! Minimal 8 karakter.</p>";
        exit; // hentikan eksekusi
    }

    // Jika password valid, tampilkan hasil form
    echo "<h3>Data Berhasil Diproses</h3>";
    echo "Buah yang dipilih: " . $buah . "<br>";

    if (!empty($warna)) {
        echo "Warna favorit Anda: " . implode(", ", $warna) . "<br>";
    } else {
        echo "Tidak memilih warna favorit.<br>";
    }

    echo "Jenis kelamin Anda: " . $jenis_kelamin . "<br>";
    echo "Password yang dimasukkan valid (panjang >= 8 karakter).";
}
?>
