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
  <title>Dashboard Admin - Data User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    body {
      min-height: 100vh;
      display: flex;
    }
    .sidebar {
      width: 250px;
      background-color: #343a40;
      color: white;
      min-height: 100vh;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
    }
    .sidebar a:hover {
      background-color: #495057;
      color: white;
      text-decoration: none;
    }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <nav class="sidebar d-flex flex-column p-3">
    <h3 class="mb-4">Admin Panel</h3>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item mb-2">
        <a href="#" class="nav-link active" aria-current="page">Dashboard</a>
      </li>
      <li class="nav-item mb-2">
        <a href="#" class="nav-link">Data User</a>
      </li>
      <li class="nav-item mb-2">
        <a href="#" class="nav-link">Pengaturan</a>
      </li>
    </ul>
    <hr />
    <div>
      <a href="#" class="btn btn-outline-light w-100">Logout</a>
    </div>
  </nav>

  <!-- Konten Utama -->
  <main class="flex-grow-1 p-4">
    <div class="container-fluid">
      <div class="row">

        <!-- Form Tambah User -->
        <section class="col-lg-4">
          <h2>Tambah Data User</h2>
          <p>Gunakan form berikut untuk menambahkan data user baru ke sistem.</p>

          <form>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan nama lengkap" required />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Alamat Email</label>
              <input type="email" class="form-control" id="email" placeholder="Masukkan email" required />
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Masukkan username" required />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Masukkan password" required />
            </div>
            <button type="submit" class="btn btn-primary">Tambah User</button>
          </form>
        </section>

        <!-- Tabel Data User -->
        <section class="col-lg-8">
          <h2>Data User</h2>
          <div class="table-responsive">
            <table class="table table-striped table-bordered align-middle">
              <thead class="table-dark">
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Agus Santoso</td>
                  <td>agus@example.com</td>
                  <td>agus123</td>
                  <td>
                    <button class="btn btn-sm btn-warning me-2">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Siti Nurhaliza</td>
                  <td>siti@example.com</td>
                  <td>sitin</td>
                  <td>
                    <button class="btn btn-sm btn-warning me-2">Edit</button>
                    <button class="btn btn-sm btn-danger">Hapus</button>
                  </td>
                </tr>
                <!-- Data lainnya -->
              </tbody>
            </table>
          </div>
        </section>

      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
