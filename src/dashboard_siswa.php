<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html"); // kembali ke login kalau belum login
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pengumuman Kelulusan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="text-center mb-4">
      <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-camera" viewBox="0 0 16 16">
        <path d="M9.5 2a.5.5 0 0 1 .5.5V3h1a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h1v-.5a.5.5 0 0 1 .5-.5h3ZM8 6a3 3 0 1 0 0 6 3 3 0 0 0 0-6Z"/>
        <path d="M8 7a2 2 0 1 1 0 4 2 2 0 0 1 0-4Z"/>
      </svg>
      <h2 class="mt-3 fw-bold text-primary">SELAMAT  <?php echo strtoupper($_SESSION['username']); ?>  ANDA DITERIMA DI SEKOLAH</h2>
      <h4 class="text-secondary">SMP BUDI CENDEKIA</h4>
      <p class="text-muted fs-6">Kabupaten Lebak Provinsi Banten</p>
      <p class="text-muted fst-italic">Tahun Ajaran 2024-2025</p>
    </div>

    <div class="card shadow-sm p-4 mx-auto" style="max-width: 500px;">
      <h5 class="mb-3 text-center">Silakan Melanjutkan Pembayaran Melalui VA Berikut</h5>
      <div class="input-group mb-3">
        <input type="text" class="form-control text-center fw-bold" placeholder="Masukkan Nomor VA" aria-label="Nomor VA" value="12334321122331321"/>
      </div>
    </div>

    <p class="text-center text-muted mt-5" style="font-size: 0.9rem;">
      &copy; 2024 SMP BUDI CENDEKIA - Kabupaten Lebak Provinsi Banten
    </p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
