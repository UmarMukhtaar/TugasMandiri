<?php 
include_once("koneksi.php");

// Ambil semua data buku
$query = "SELECT * FROM tb_buku";
$hasil = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Koleksi Buku</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" 
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous">
    <!-- FontAwesome -->
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

    <div class="container mt-4">
        <div class="alert alert-success text-center" role="alert"> 
            <h2>DATA KOLEKSI BUKU PERPUSTAKAAN</h2>
        </div>

        <a href="tambahbuku.php" class="btn btn-primary mb-3">
            <i class="fas fa-plus-circle mr-2"></i>Tambah Buku
        </a>

        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Id_Buku</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Pengarang</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_array($hasil)) { ?>
                    <tr>
                        <th scope="row"><?php echo $data['id_buku']; ?></th>
                        <td><?php echo $data['judul_buku']; ?></td>
                        <td><?php echo $data['pengarang']; ?></td>
                        <td><?php echo $data['tahun_terbit']; ?></td>
                        <td><?php echo $data['kategori']; ?></td>
                        <td>
                            <a href="editbuku.php?id=<?php echo $data['id_buku']; ?>" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="hapusbuku.php?id=<?php echo $data['id_buku']; ?>" 
                               class="btn btn-danger btn-sm" 
                               onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?');">
                                <i class="fas fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
            crossorigin="anonymous"></script>

</body>
</html>
