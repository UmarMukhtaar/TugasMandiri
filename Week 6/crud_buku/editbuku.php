<?php 
include_once("koneksi.php");

$id = $_GET['id'];
$query = "SELECT * FROM tb_buku WHERE id_buku = $id";
$hasil = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($hasil);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Buku</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">
</head>
<body>

    <div class="container mt-4">
        <div class="alert alert-info text-center" role="alert">
            <h2>Edit Koleksi Buku</h2>
        </div>

        <form method="post" action="proseseditbuku.php">
            <!-- ID Buku (Dibaca dari Database, Tidak Bisa Diedit) -->
            <div class="form-group">
                <label for="id_buku">ID Buku</label>
                <input type="text" class="form-control" value="<?php echo $data['id_buku']; ?>" readonly>
                <input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">
            </div>
            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" name="judul" class="form-control" value="<?php echo $data['judul_buku']; ?>" required>
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" name="pengarang" class="form-control" value="<?php echo $data['pengarang']; ?>" required>
            </div>
            <div class="form-group">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" name="tahun_terbit" class="form-control" value="<?php echo $data['tahun_terbit']; ?>" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $data['kategori']; ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

</body>
</html>
