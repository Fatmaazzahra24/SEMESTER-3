<?php
// Lokasi penyimpanan file gambar yang diunggah
$targetDirectory = "images/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Cek apakah ada file yang diupload
if (!empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedExtensions = array("jpg", "jpeg", "png", "gif"); // Jenis file yang diperbolehkan
    $maxSize = 5 * 1024 * 1024; // Maksimal 5 MB per file

    // Loop melalui semua file yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . basename($fileName);

        // Validasi tipe file dan ukuran file
        if (in_array($fileType, $allowedExtensions) && $fileSize <= $maxSize) {
            
            // Cek apakah file valid gambar
            if (getimagesize($fileTmp) !== false) {
                if (move_uploaded_file($fileTmp, $targetFile)) {
                    echo "✅ File <b>$fileName</b> berhasil diunggah.<br>";
                    echo "<img src='$targetFile' width='150' style='height:auto; border:1px solid #ccc; margin:5px;'><br><br>";
                } else {
                    echo "❌ Gagal mengunggah file <b>$fileName</b>.<br>";
                }
            } else {
                echo "⚠️ File <b>$fileName</b> bukan gambar yang valid.<br>";
            }

        } else {
            echo "⚠️ File <b>$fileName</b> tidak valid atau melebihi ukuran 5 MB.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
