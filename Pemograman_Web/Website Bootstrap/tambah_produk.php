<?php
require __DIR__ . '/koneksi.php';

$err = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama   = trim($_POST['nama']);
    $harga  = trim($_POST['harga']);
    $diskon = trim($_POST['diskon']);

    // ambil data file
    $gambar_nama = $_FILES['gambar']['name'] ?? '';
    $gambar_tmp  = $_FILES['gambar']['tmp_name'] ?? '';
    $gambar_size = $_FILES['gambar']['size'] ?? 0;

    if ($nama === '' || $harga === '') {
        $err = 'Nama produk dan harga wajib diisi!';
    } elseif (!$gambar_tmp) {
        $err = 'Gambar wajib diupload!';
    } else {
        // validasi ekstensi
        $ext = strtolower(pathinfo($gambar_nama, PATHINFO_EXTENSION));
        $allowed_ext = ['jpg', 'jpeg', 'png', 'webp'];

        if (!in_array($ext, $allowed_ext)) {
            $err = 'Format gambar tidak didukung (hanya JPG, PNG, WEBP).';
        } elseif ($gambar_size > 3 * 1024 * 1024) { // maks 3 MB
            $err = 'Ukuran gambar terlalu besar (maks 3MB).';
        } else {
            // beri nama unik agar tidak bentrok
            $file_name_new = uniqid('img_', true) . '.' . $ext;
            $target_path = __DIR__ . '/uploads/' . $file_name_new;

            if (move_uploaded_file($gambar_tmp, $target_path)) {
                try {
                    // gunakan qparams() dari koneksi.php
                    qparams(
                        'INSERT INTO "TB_Produk" (nama, harga, diskon, gambar)
                         VALUES ($1, $2, NULLIF($3, \'\'), $4)',
                        [$nama, $harga, $diskon, $file_name_new]
                    );

                    header('Location: produk_CRUD.php');
                    exit;
                } catch (Throwable $e) {
                    $err = $e->getMessage();
                }
            } else {
                $err = 'Gagal memindahkan file gambar.';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
  <h2 class="mb-4">Tambah Produk</h2>

  <?php if ($err): ?>
    <div class="alert alert-danger"><?= htmlspecialchars($err) ?></div>
  <?php endif; ?>

  <form method="post" enctype="multipart/form-data" class="card p-4 shadow-sm">
    <div class="mb-3">
      <label class="form-label">Nama Produk</label>
      <input name="nama" class="form-control" required
             value="<?= htmlspecialchars($_POST['nama'] ?? '') ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Harga</label>
      <input name="harga" type="number" class="form-control" required
             value="<?= htmlspecialchars($_POST['harga'] ?? '') ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Diskon (%)</label>
      <input name="diskon" type="number" class="form-control"
             value="<?= htmlspecialchars($_POST['diskon'] ?? '') ?>">
    </div>

    <div class="mb-3">
      <label class="form-label">Upload Gambar</label>
      <input type="file" name="gambar" accept="image/*" class="form-control" required>
      <small class="text-muted">Hanya JPG, PNG, WEBP — maks 3 MB</small>
    </div>

    <button class="btn btn-primary">Simpan</button>
    <a href="Product.php" class="btn btn-secondary">Kembali</a>
  </form>
</div>
</body>
</html>