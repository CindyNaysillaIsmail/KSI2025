<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa - KSI2025</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Data Mahasiswa</a>
    </div>
  </nav>

  <!-- Konten -->
  <div class="container mt-4">
    <h3 class="text-center mb-4">Daftar Mahasiswa</h3>

    <?php
      // Data mahasiswa (PHP Native)
      $mahasiswa = [
        ["nama" => "Cindy Naysilla Ismail", "nim" => "2301001", "prodi" => "Teknik Informatika"],
        ["nama" => "Putri Anggraini", "nim" => "2301002", "prodi" => "Sistem Informasi"],
        ["nama" => "Vina Sahara", "nim" => "2301003", "prodi" => "Teknik Komputer"],
        ["nama" => "Ni Komang", "nim" => "2301004", "prodi" => "Manajemen Informatika"],
      ];
    ?>

    <table class="table table-bordered table-striped">
      <thead class="table-primary text-center">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>Program Studi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1; foreach($mahasiswa as $mhs): ?>
          <tr>
            <td class="text-center"><?= $no++; ?></td>
            <td><?= $mhs["nama"]; ?></td>
            <td><?= $mhs["nim"]; ?></td>
            <td><?= $mhs["prodi"]; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <!-- Footer -->
  <footer class="bg-primary text-white text-center py-3 mt-5">
    <p class="mb-0">© 2025 - KSI2025 | Tugas PHP + Bootstrap</p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
