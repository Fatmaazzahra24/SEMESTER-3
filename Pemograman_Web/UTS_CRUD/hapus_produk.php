<?php
require __DIR__ . '/koneksi.php'; 

$id = $_GET['id'] ?? '';
if ($id === '') {
    die('Produk tidak ditemukan.');
}

try {
    $sql = 'DELETE FROM "TB_Produk" WHERE id = $1';
    $result = pg_query_params(get_pg_connection(), $sql, [$id]);

    if ($result) {
        header('Location: Product.php');
        exit;
    } else {
        echo 'Gagal menghapus data: ' . pg_last_error(get_pg_connection());
    }
} catch (Throwable $e) {
    echo 'Terjadi kesalahan: ' . htmlspecialchars($e->getMessage());
}
?>

