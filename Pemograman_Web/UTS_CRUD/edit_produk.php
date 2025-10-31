<?php
require __DIR__ . '/koneksi.php';

$err = '';
$id = (int)($_GET['id'] ?? 0);
if ($id <= 0) {
    http_response_code(400);
    exit('ID tidak valid.');
}

try {
    $res = qparams('SELECT id, nama, harga, diskon, gambar FROM "TB_Produk" WHERE id = $1', [$id]);
    $row = pg_fetch_assoc($res);
    if (!$row) {
        http_response_code(404);
        exit('Data tidak ditemukan.');
    }
} catch (Throwable $e) {
    exit('Error: ' . htmlspecialchars($e->getMessage()));
}

$nama   = $row['nama'];
$harga  = $row['harga'];
$diskon = $row['diskon'];
$gambar = $row['gambar'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama   = trim($_POST['nama'] ?? '');
    $harga  = trim($_POST['harga'] ?? '');
    $diskon = trim($_POST['diskon'] ?? '');

    // handle file baru
    $gambar_baru = $_FILES['gambar']['name'] ?? '';
    $tmp_file    = $_FILES['gambar']['tmp_name'] ?? '';

    if ($nama === '' || $harga === '') {
        $err = 'Nama dan harga wajib diisi.';
    } else {
        try {
            if ($gambar_baru && $tmp_file) {
                $ext = strtolower(pathinfo($gambar_baru, PATHINFO_EXTENSION));
                $allowed_ext = ['jpg', 'jpeg', 'png', 'webp'];
                if (!in_array($ext, $allowed_ext)) {
                    throw new RuntimeException('Format gambar tidak didukung.');
                }
                $new_name = uniqid('img_', true) . '.' . $ext;
                $target = __DIR__ . '/uploads/' . $new_name;
                move_uploaded_file($tmp_file, $target);
                if ($gambar && file_exists(__DIR__ . '/uploads/' . $gambar)) {
                    unlink(__DIR__ . '/uploads/' . $gambar);
                }

                $gambar = $new_name; 
            }
            qparams(
                'UPDATE "TB_Produk"
                 SET nama = $1, harga = $2, diskon = NULLIF($3, \'\'), gambar = NULLIF($4, \'\')
                 WHERE id = $5',
                [$nama, $harga, $diskon, $gambar, $id]
            );

            header('Location: Product.php');
            exit;
        } catch (Throwable $e) {
            $err = $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Edit Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
  <h2 class="mb-4">Edit Produk</h2>

  <?php if ($err): ?>
    <div class="alert alert-danger"><?= htmlspecialchars($err) ?></div>
  <?php endif; ?>

  <form method="post" enctype="multipart/form-data" class="card p-4 shadow-sm">
    <div class="mb-3">
      <label class="form-label">Nama Produk</label>
      <input name="nama" class="form-control" required value="<?= htmlspecialchars($nama) ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Harga</label>
      <input name="harga" type="number" class="form-control" required value="<?= htmlspecialchars($harga) ?>">
    </div>
    <div class="mb-3">
      <label class="form-label">Diskon (%)</label>
      <input name="diskon" type="number" class="form-control" value="<?= htmlspecialchars($diskon) ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Gambar Saat Ini</label><br>
      <?php if ($gambar): ?>
        <img src="uploads/<?= htmlspecialchars($gambar) ?>" alt="Gambar Produk" class="img-thumbnail" style="max-width:200px;">
      <?php else: ?>
        <p class="text-muted">Belum ada gambar</p>
      <?php endif; ?>
    </div>

    <div class="mb-3">
      <label class="form-label">Upload Gambar Baru (Opsional)</label>
      <input type="file" name="gambar" accept="image/*" class="form-control">
    </div>

    <button class="btn btn-primary">Simpan Perubahan</button>
      <a href="Product.php" class="btn btn-secondary">Batal</a>
  </form>
</div>
</body>
</html>
