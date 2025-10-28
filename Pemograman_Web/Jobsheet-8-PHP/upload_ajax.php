<?php
if (isset($_FILES['files'])) {
    $totalFiles = count($_FILES['files']['name']);
    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $targetDirectory = "uploads/";

    // ✅ Buat folder jika belum ada
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    // Loop untuk proses setiap file
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $targetFile = $targetDirectory . basename($fileName);

        // ✅ Seleksi ekstensi
        if (in_array($fileExt, $allowedExtensions)) {
            if (move_uploaded_file($fileTmp, $targetFile)) {
                echo "File <b>$fileName</b> berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file <b>$fileName</b>.<br>";
            }
        } else {
            echo "File <b>$fileName</b> memiliki ekstensi tidak diizinkan.<br>";
        }
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
