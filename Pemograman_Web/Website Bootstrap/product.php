<?php
require __DIR__ . '/koneksi.php';

// Ambil data dari tabel
$res = q('SELECT id, nama, harga, diskon, gambar FROM "TB_Produk" ORDER BY id DESC');
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Toko Furnitur - Produk</title>

  <!-- Bootstrap CSS + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light text-dark">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand fw-bold text-white" href="#">Fatma</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link text-white fw-semibold" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white fw-semibold" href="product.php">Shop</a></li>
          <li class="nav-item"><a class="nav-link text-white fw-semibold" href="galerry.php">Gallery</a></li>
        </ul>
      </div>
      <a href="login.php" class="btn btn-outline-light fw-semibold rounded-pill px-3 py-1">Login</a>
    </div>
  </nav>

  <!-- DAFTAR PRODUK -->
  <main class="container my-5">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php while ($produk = pg_fetch_assoc($res)) : ?>
        <?php 
          $nama   = htmlspecialchars($produk['nama']);
          $harga  = number_format($produk['harga'], 0, ',', '.');
          $diskon = (int)$produk['diskon'];
          $gambar = !empty($produk['gambar']) ? 'uploads/'.$produk['gambar'] : 'assets/no-image.png';
        ?>
        <div class="col">
          <div class="card h-100 shadow-sm border-0">
            <div class="position-relative bg-white d-flex align-items-center justify-content-center" style="height:220px;">
              <img src="<?php echo $gambar; ?>" alt="<?php echo $nama; ?>" class="img-fluid" style="max-height:100%; object-fit:contain;">
              <?php if ($diskon): ?>
                <span class="badge bg-secondary position-absolute top-0 start-0 m-2">
                  Diskon <?php echo $diskon; ?>%
                </span>
              <?php endif; ?>
            </div>
            <div class="card-body text-center">
              <h5 class="fw-bold mb-2"><?php echo $nama; ?></h5>
              <p class="fw-semibold text-muted mb-4">Rp <?php echo $harga; ?></p>
              <a href="cart_add.php?id=<?php echo $produk['id']; ?>" class="btn btn-secondary w-100 fw-bold">
                BELI SEKARANG
              </a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="bg-secondary text-white pt-5 pb-3">
    <div class="container">
      <div class="row gy-4">
        <div class="col-12 col-md-4">
          <h5 class="fw-bold text-uppercase mb-3">Fatma Furniture</h5>
          <p class="small mb-0">Koleksi furnitur premium yang elegan, nyaman, dan berkualitas tinggi.</p>
        </div>
        <div class="col-6 col-md-2">
          <h6 class="fw-bold mb-3">Menu</h6>
          <ul class="list-unstyled small">
            <li><a href="#" class="text-decoration-none text-white">Home</a></li>
            <li><a href="#" class="text-decoration-none text-white">Shop</a></li>
            <li><a href="#" class="text-decoration-none text-white">Gallery</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-3">
          <h6 class="fw-bold mb-3">Bantuan</h6>
          <ul class="list-unstyled small">
            <li><a href="#" class="text-decoration-none text-white">FAQ</a></li>
            <li><a href="#" class="text-decoration-none text-white">Privasi</a></li>
            <li><a href="#" class="text-decoration-none text-white">Syarat & Ketentuan</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-3">
          <h6 class="fw-bold mb-3">Ikuti Kami</h6>
          <div class="d-flex gap-3 fs-5">
            <a href="#" class="text-white"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-white"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
      <hr class="border-light opacity-25 my-4">
      <div class="text-center small text-white-50">
        &copy; 2025 Fatma Furniture. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
