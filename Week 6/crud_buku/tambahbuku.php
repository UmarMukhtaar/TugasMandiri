<?php 
include_once("koneksi.php");

// Ambil ID terakhir
$query = "SELECT MAX(id_buku) AS last_id FROM tb_buku";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($hasil);
$next_id = $data['last_id'] + 1;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Buku</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">
</head>
<body>

    <div class="container mt-4">
        <div class="alert alert-success text-center" role="alert">
            <h2>Tambah Koleksi Buku</h2>
        </div>

        <form method="post" action="prosestambahbuku.php">
            <!-- ID Buku (Auto Increment, Tidak Bisa Diedit) -->
            <div class="form-group">
                <label for="id_buku">ID Buku</label>
                <input type="text" class="form-control" name="id_buku" value="<?= $next_id; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" name="judul" class="form-control" placeholder="Judul Buku" required>
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" name="pengarang" class="form-control" placeholder="Pengarang" required>
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" class="form-control" placeholder="Tahun Terbit" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" class="form-control" placeholder="Kategori" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Buku</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

</body>
</html>
