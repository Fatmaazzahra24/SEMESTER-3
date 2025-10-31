<?php
require __DIR__ . '/koneksi.php';

// Ambil data dari tabel
$res = q('SELECT id, nama, harga, diskon, gambar FROM "TB_Produk" ORDER BY id DESC');
$rows = pg_fetch_all($res) ?: [];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toko Furnitur - Produk</title>

  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fb;
      font-family: 'Poppins', sans-serif;
    }

    /* ==== CARD PRODUK ==== */
    .product-card {
      position: relative;
      border: none;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      transition: transform 0.2s ease;
    }

    .product-card:hover {
      transform: translateY(-4px);
    }

    .product-card img {
      width: 100%;
      height: 260px;
      object-fit: cover;
      border-radius: 10px;
    }

    .discount {
      position: absolute;
      top: 10px;
      left: 10px;
      background-color: #ffc107;
      color: #212529;
      font-weight: 600;
      font-size: 13px;
      padding: 5px 10px;
      border-radius: 6px;
    }

    .card-action-buttons {
      position: absolute;
      top: 10px;
      right: 10px;
      display: flex;
      gap: 6px;
      z-index: 10;
    }

    .cart-btn {
      background-color: #8B4513;
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 12px 0;
      font-weight: 600;
      text-transform: uppercase;
      width: 100%;
      transition: background 0.2s ease;
    }

    .cart-btn:hover {
      background-color: #A0522D;
    }

    footer {
      background-color: #d5d0cc;
      padding: 40px 0;
      margin-top: 60px;
    }

    .bottom-bar {
      background: #884205;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      font-size: 14px;
    }
  </style>
</head>

<body>

  <!-- ==== NAVBAR ==== -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-brown" style="background-color: #8B4513;">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Toko Furnitur</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Galeri</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ==== SECTION PRODUK ==== -->
  <section class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="fw-semibold">Data Produk</h2>
      <a href="tambah_produk.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Produk
      </a>
    </div>

    <div class="row g-4">
      <?php if (empty($rows)): ?>
        <div class="col-12 text-center">
          <p>Belum ada produk yang ditambahkan.</p>
        </div>
      <?php else: ?>
        <?php foreach ($rows as $produk): ?>
          <?php 
            $imgPath = !empty($produk['gambar'])
              ? 'uploads/' . htmlspecialchars($produk['gambar'])
              : 'assets/no-image.png';
          ?>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card product-card">
              
              <!-- Tombol ubah & hapus -->
              <div class="card-action-buttons">
                <a href="edit_produk.php?id=<?= urlencode($produk['id']); ?>" class="btn btn-warning btn-sm">
                  <i class="bi bi-pencil-square"></i> Ubah
                </a>
                <a href="hapus_produk.php?id=<?= urlencode($produk['id']); ?>" class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin ingin menghapus produk ini?');">
                  <i class="bi bi-trash3"></i> Hapus
                </a>
              </div>

              <!-- Diskon -->
              <?php if (!empty($produk['diskon'])): ?>
                <span class="discount">Diskon <?= htmlspecialchars($produk['diskon']); ?>%</span>
              <?php endif; ?>

              <!-- Gambar -->
              <img src="<?= $imgPath ?>" alt="<?= htmlspecialchars($produk['nama'] ?? 'Produk'); ?>" class="card-img-top">

              <!-- Detail Produk -->
              <div class="card-body text-center">
                <h5 class="card-title"><?= htmlspecialchars($produk['nama']); ?></h5>
                <p class="card-text fw-semibold mb-3">Rp <?= number_format((float)$produk['harga'], 0, ',', '.'); ?></p>
                <button class="cart-btn">Beli Sekarang</button>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </section>

  <!-- ==== FOOTER ==== -->
  <footer>
    <div class="container">
      <div class="row text-center text-md-start">
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold mb-3">Tentang Kami</h5>
          <p>Kami adalah perusahaan furnitur yang berkomitmen menyediakan desain modern dan minimalis berkualitas tinggi untuk rumah Anda.</p>
        </div>
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold mb-3">Tautan Cepat</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-dark text-decoration-none">Beranda</a></li>
            <li><a href="#" class="text-dark text-decoration-none">Tentang Kami</a></li>
            <li><a href="#" class="text-dark text-decoration-none">Layanan</a></li>
            <li><a href="#" class="text-dark text-decoration-none">Kontak</a></li>
          </ul>
        </div>
        <div class="col-md-4 mb-4">
          <h5 class="fw-bold mb-3">Ikuti Kami</h5>
          <a href="#" class="text-dark me-3"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-dark me-3"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-dark me-3"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="text-dark"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>

    <div class="bottom-bar">
      &copy; 2025 FATMA AZZAHRA. Semua Hak Dilindungi.
    </div>
  </footer>

  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
