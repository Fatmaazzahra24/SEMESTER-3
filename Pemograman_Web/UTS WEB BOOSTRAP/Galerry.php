<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>

  <!-- Bootstrap CSS + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light text-dark">

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#8B5E3C;">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold text-white" href="#">Fatma</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNav" aria-controls="navbarNav"
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item"><a class="nav-link text-white fw-semibold" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white fw-semibold" href="Product.php">Shop</a></li>
          <li class="nav-item"><a class="nav-link text-white fw-semibold active" href="Galerry.php">Gallery</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- GALERI -->
  <main class="container py-5">
    <h2 class="text-center fw-bold mb-5">Galeri Interior</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
      
      <!-- Kartu 1 -->
      <div class="col">
        <div class="card border-0 shadow-sm overflow-hidden h-100">
          <img src="img/galerry1.jpg" class="card-img-top"
               alt="Ruang Tamu Minimalis Modern"
               style="height:300px; object-fit:cover;">
          <div class="card-body text-center bg-dark bg-opacity-75 text-white py-2">
            Ruang Tamu Minimalis Modern
          </div>
        </div>
      </div>

      <!-- Kartu 2 -->
      <div class="col">
        <div class="card border-0 shadow-sm overflow-hidden h-100">
          <img src="img/galerry2.jpg" class="card-img-top"
               alt="Dapur Putih Elegan"
               style="height:300px; object-fit:cover;">
          <div class="card-body text-center bg-dark bg-opacity-75 text-white py-2">
            Dapur Putih Elegan
          </div>
        </div>
      </div>

      <!-- Kartu 3 -->
      <div class="col">
        <div class="card border-0 shadow-sm overflow-hidden h-100">
          <img src="img/galerry3.jpg" class="card-img-top"
               alt="Rak & Tanaman Estetik"
               style="height:300px; object-fit:cover;">
          <div class="card-body text-center bg-dark bg-opacity-75 text-white py-2">
            Rak & Tanaman Estetik
          </div>
        </div>
      </div>

      <!-- Kartu 4 -->
      <div class="col">
        <div class="card border-0 shadow-sm overflow-hidden h-100">
          <img src="img/galerry4.jpg" class="card-img-top"
               alt="Ruang Makan Alami"
               style="height:300px; object-fit:cover;">
          <div class="card-body text-center bg-dark bg-opacity-75 text-white py-2">
            Ruang Makan Alami
          </div>
        </div>
      </div>

      <!-- Kartu 5 -->
      <div class="col">
        <div class="card border-0 shadow-sm overflow-hidden h-100">
          <img src="img/galerry5.jpg" class="card-img-top"
               alt="Ruang Keluarga Hangat"
               style="height:300px; object-fit:cover;">
          <div class="card-body text-center bg-dark bg-opacity-75 text-white py-2">
            Ruang Keluarga Hangat
          </div>
        </div>
      </div>

      <!-- Kartu 6 -->
      <div class="col">
        <div class="card border-0 shadow-sm overflow-hidden h-100">
          <img src="img/galerry6.jpg" class="card-img-top"
               alt="Ruang Santai Kontemporer"
               style="height:300px; object-fit:cover;">
          <div class="card-body text-center bg-dark bg-opacity-75 text-white py-2">
            Ruang Santai Kontemporer
          </div>
        </div>
      </div>

      <!-- Kartu 7 -->
      <div class="col">
        <div class="card border-0 shadow-sm overflow-hidden h-100">
          <img src="img/galerry7.jpg" class="card-img-top"
               alt="Sudut Baca Cozy"
               style="height:300px; object-fit:cover;">
          <div class="card-body text-center bg-dark bg-opacity-75 text-white py-2">
            Sudut Baca Cozy
          </div>
        </div>
      </div>

      <!-- Kartu 8 -->
      <div class="col">
        <div class="card border-0 shadow-sm overflow-hidden h-100">
          <img src="img/galerry8.jpg" class="card-img-top"
               alt="Kamar Tidur Modern"
               style="height:300px; object-fit:cover;">
          <div class="card-body text-center bg-dark bg-opacity-75 text-white py-2">
            Kamar Tidur Modern
          </div>
        </div>
      </div>

      <!-- Kartu 9 -->
      <div class="col">
        <div class="card border-0 shadow-sm overflow-hidden h-100">
          <img src="img/galerry9.jpg" class="card-img-top"
               alt="Dekorasi Ruangan Natural"
               style="height:300px; object-fit:cover;">
          <div class="card-body text-center bg-dark bg-opacity-75 text-white py-2">
            Dekorasi Ruangan Natural
          </div>
        </div>
      </div>

    </div>
  </main>

  <!-- FOOTER -->
    <footer class="pt-5 pb-3" style="background-color:#5D4037; color:#F3E9E0;">
    <div class="container">
      <div class="row gy-4">
        <div class="col-12 col-md-4">
          <h5 class="fw-bold text-uppercase mb-3">Fatma Furniture</h5>
          <p class="small mb-0">Koleksi furnitur premium yang elegan, nyaman, dan berkualitas tinggi.</p>
        </div>
        <div class="col-6 col-md-2">
          <h6 class="fw-bold mb-3">Menu</h6>
          <ul class="list-unstyled small">
            <li><a href="#" class="text-decoration-none text-light">Home</a></li>
            <li><a href="#" class="text-decoration-none text-light">Shop</a></li>
            <li><a href="#" class="text-decoration-none text-light">Gallery</a></li>
          </ul>
        </div>
        <div class="col-6 col-md-3">
          <h6 class="fw-bold mb-3">Bantuan</h6>
          <ul class="list-unstyled small">
            <li><a href="#" class="text-decoration-none text-light">FAQ</a></li>
            <li><a href="#" class="text-decoration-none text-light">Privasi</a></li>
            <li><a href="#" class="text-decoration-none text-light">Syarat & Ketentuan</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-3">
          <h6 class="fw-bold mb-3">Ikuti Kami</h6>
          <div class="d-flex gap-3 fs-5">
            <a href="#" class="text-light"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-light"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-light"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="text-light"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>

      <hr class="border-light opacity-25 my-4">
      <div class="text-center small" style="color:#D7CCC8;">
        &copy; 2025 Fatma Furniture. All rights reserved.
      </div>
    </div>
  </footer>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
