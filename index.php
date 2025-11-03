<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa - KSI2025</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">Data Mahasiswa</a>
    </div>
  </nav>

  <div class="container mt-4">
    <h3 class="text-center mb-4">Daftar Mahasiswa</h3>

    <div class="text-end mb-3">
      <a href="tambah.php" class="btn btn-success">+ Tambah Data</a>
    </div>

    <?php
      include 'koneksi.php';
      $query = "SELECT * FROM mahasiswa ORDER BY id ASC";
      $result = mysqli_query($conn, $query);
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
        <?php
          $no = 1;
          if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                      <td class='text-center'>{$no}</td>
                      <td>{$row['nama']}</td>
                      <td>{$row['nim']}</td>
                      <td>{$row['prodi']}</td>
                    </tr>";
              $no++;
            }
          } else {
            echo "<tr><td colspan='4' class='text-center'>Belum ada data</td></tr>";
          }
        ?>
      </tbody>
    </table>
  </div>

  <footer class="bg-primary text-white text-center py-3 mt-5">
    <p class="mb-0">© 2025 - KSI2025 | Tugas PHP + Bootstrap</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
