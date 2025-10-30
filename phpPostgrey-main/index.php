<?php
require __DIR__ . '/koneksi.php';

// Ambil semua data dari tabel
$res = q('SELECT id, nim, nama, email, jurusan, created_at
          FROM "TB_Mahasiswa"
          ORDER BY id DESC');
$rows = pg_fetch_all($res) ?: [];
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Roboto, Arial, sans-serif;
    }
    .container {
      max-width: 960px;
      margin-top: 40px;
    }
    h1 {
      font-weight: 600;
    }
    .table thead {
      background-color: #f1f1f1;
    }
    .btn {
      border-radius: 6px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h1 class="h3 mb-0">Data Mahasiswa</h1>
      <a href="create.php" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Tambah Mahasiswa
      </a>
    </div>

    <div class="table-responsive shadow-sm rounded bg-white p-3">
      <table class="table table-bordered table-hover align-middle">
        <thead class="table-light">
          <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Dibuat</th>
            <th class="text-center">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if (!$rows): ?>
            <tr>
              <td colspan="7" class="text-center text-muted">Belum ada data.</td>
            </tr>
          <?php else: foreach ($rows as $r): ?>
            <tr>
              <td><?= htmlspecialchars($r['id']) ?></td>
              <td><?= htmlspecialchars($r['nim']) ?></td>
              <td><?= htmlspecialchars($r['nama']) ?></td>
              <td><?= htmlspecialchars($r['email'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
              <td><?= htmlspecialchars($r['jurusan'] ?? '', ENT_QUOTES, 'UTF-8') ?></td>
              <td><?= htmlspecialchars((string)($r['created_at'])) ?></td>
              <td class="text-center">
                <a href="edit.php?id=<?= urlencode($r['id']) ?>" class="btn btn-warning btn-sm">
                  <i class="bi bi-pencil-square"></i> Ubah
                </a>

                <form id="deleteForm<?= $r['id'] ?>" 
                      action="delete.php" 
                      method="post" 
                      class="d-inline"
                      onsubmit="return confirm('Hapus data ini?');">
                  <input type="hidden" name="id" value="<?= htmlspecialchars($r['id']) ?>">
                  <button type="submit" class="btn btn-danger btn-sm">
                    <i class="bi bi-trash"></i> Hapus
                  </button>
                </form>
              </td>
            </tr>
          <?php endforeach; endif; ?>
        </tbody>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
