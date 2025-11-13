<?php
require __DIR__ . '/koneksi.php';

// Ambil data dari tabel
$res = q('SELECT id, nama, harga, diskon, gambar FROM "TB_Produk" ORDER BY id ASC');
$rows = pg_fetch_all($res) ?: [];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toko Furnitur - Data Produk</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fb;
      font-family: 'Poppins', sans-serif;
    }
    .table img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 6px;
    }
  </style>
</head>

<body>

  <!-- ==== NAVBAR ==== -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #8B4513;">
    <div class="container">
      <h1 class="navbar-brand fw-bold" href="#">Toko Furnitur</h1>
      <a class="navbar-brand fw-bold" href="logout.php">Log Out</a>
      
    </div>
  </nav>

  <!-- ==== DATA PRODUK (TABEL) ==== -->
  <section class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-semibold">Daftar Produk</h2>
      <a href="tambah_produk.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Produk
      </a>
    </div>

    <div class="table-responsive">
      <table class="table table-striped table-bordered align-middle shadow-sm">
        <thead class="table-dark text-center">
          <tr>
            <th >No</th>
            <th >Gambar</th>
            <th>Nama Produk</th>
            <th >Harga</th>
            <th >Diskon</th>
            <th >Aksi</th>
          </tr>
        </thead>
         <tbody>
            <?php if (empty($rows)): ?>
              <tr>
                <td colspan="6" class="text-center text-muted py-4">Belum ada data produk.</td>
              </tr>
            <?php else: ?>
              <?php $no = 1; foreach ($rows as $produk): ?>
                <?php 
                  $imgPath = $produk['gambar'] 
                    ? 'uploads/' . htmlspecialchars($produk['gambar']) 
                    : 'assets/no-image.png';
                ?>
                <tr>
                  <td class="text-center"><?= $no++ ?></td>
                  <td class="text-center">
                    <img src="<?= $imgPath ?>" alt="<?= htmlspecialchars($produk['nama']) ?>">
                  </td>
                  <td><?= htmlspecialchars($produk['nama']) ?></td>
                  <td class="text-center">Rp <?= htmlspecialchars($produk['harga']) ?></td>
                  <td class="text-center"><?= htmlspecialchars($produk['diskon']) ?>%</td>
                  <td class="text-center">
                    <a href="edit_produk.php?id=<?= $produk['id'] ?>" class="btn btn-warning btn-sm">
                      <i class="bi bi-pencil-square"></i> Ubah
                    </a>
                    <a href="hapus_produk.php?id=<?= $produk['id'] ?>" class="btn btn-danger btn-sm"
                      onclick="return confirm('Yakin ingin menghapus produk ini?');">
                      <i class="bi bi-trash3"></i> Hapus
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>

      </table>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
