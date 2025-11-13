<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fatma Furniture</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Fatma</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active text-white" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="product.php">Shop</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="gallery.php">Gallery</a></li>
        </ul>
      </div>
      <a href="login.php" class="btn btn-outline-light ms-3">Login</a>
    </div>
  </nav>

  <!-- HERO -->
  <section class="text-center text-white d-flex align-items-center justify-content-center"
    style="background:url('img/interior1.jpg') center/cover no-repeat; height:100vh; margin-bottom:5rem;">
    <div>
      <h6 class="text-uppercase fw-semibold mb-2">Fatma</h6>
      <h1 class="display-4 fw-bold mb-3">Luxury <span class="text-secondary">Furniture</span></h1>
      <p class="lead mb-4">Desain elegan yang memancarkan kehangatan dan kenyamanan.</p>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="py-5 my-5">
    <div class="container">
      <div class="row text-center g-4">
        <div class="col-6 col-md-3">
          <div class="card h-100 border-secondary">
            <div class="card-body">
              <i class="bi bi-bag display-6 text-secondary"></i>
              <p class="mt-2 fw-semibold">Easy Shopping</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card h-100 border-secondary">
            <div class="card-body">
              <i class="bi bi-truck display-6 text-secondary"></i>
              <p class="mt-2 fw-semibold">Fast Delivery</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card h-100 border-secondary">
            <div class="card-body">
              <i class="bi bi-headset display-6 text-secondary"></i>
              <p class="mt-2 fw-semibold">24/7 Support</p>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="card h-100 border-secondary">
            <div class="card-body">
              <i class="bi bi-shield-check display-6 text-secondary"></i>
              <p class="mt-2 fw-semibold">Money Guarantee</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- VIDEO SECTION -->
  <section class="py-5 my-5">
    <div class="container">
      <div class="row align-items-stretch g-4">
        <div class="col-md-6 d-flex">
          <div class="ratio ratio-16x9 flex-fill">
            <video src="img/video.mp4" autoplay loop muted class="w-100 h-100"></video>
          </div>
        </div>
        <div class="col-md-6 d-flex">
          <div class="card border-secondary shadow-sm p-4 flex-fill d-flex justify-content-center text-center">
            <div>
              <span class="badge bg-secondary mb-3">Furniture Design Ideas</span>
              <p style="text-align: justify;">
                Hadirkan suasana elegan dan nyaman dengan koleksi furnitur premium pilihan terbaik.
                Dirancang dengan material berkualitas tinggi dan sentuhan desain kontemporer
                untuk menciptakan hunian yang indah dan berkarakter. Setiap detail dalam koleksi kami
                diciptakan untuk menghadirkan harmoni antara fungsi dan estetika.
                Wujudkan ruang impian Anda dengan furnitur yang tidak hanya mempercantik tampilan,
                tetapi juga memberikan kenyamanan yang bertahan lama.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- COLLECTION -->
  <section class="py-5 my-5">
    <div class="container w-75 mx-auto">
      <div class="row g-2 align-items-center">
        <div class="col-lg-6">
          <h2 class="fw-bold mb-3 text-uppercase text-center text-secondary">Collection</h2>
          <div class="row row-cols-2 g-2 mb-3">
            <div class="col text-center"><img src="img/sofa.png" class="img-fluid w-75 rounded" alt="Sofa"></div>
            <div class="col text-center"><img src="img/meja.png" class="img-fluid w-75 rounded" alt="Meja"></div>
            <div class="col text-center"><img src="img/lampu.png" class="img-fluid w-75 rounded" alt="Lampu"></div>
            <div class="col text-center"><img src="img/lemari.png" class="img-fluid w-75 rounded" alt="Lemari"></div>
          </div>
          <div class="text-start">
            <a href="Product.html" class="btn btn-secondary btn-sm">View More</a>
          </div>
        </div>
        <div class="col-lg-6 text-center">
          <img src="img/gambar_seller.jpg" alt="Dining Room" class="img-fluid w-75 rounded shadow-sm">
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-secondary text-light pt-5 pb-3 mt-5">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-4">
          <h5 class="fw-bold text-uppercase">Fatma Furniture</h5>
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
        <div class="col-md-3">
          <h6 class="fw-bold mb-3">Ikuti Kami</h6>
          <div class="d-flex gap-3 fs-5">
            <a href="#" class="text-light"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-light"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-light"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="text-light"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
      <hr class="border-light opacity-50 my-4">
      <div class="text-center small text-light">
        &copy; 2025 Fatma Furniture. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
