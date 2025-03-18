<?php 
include_once("koneksi.php");

$id = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];

// Query update data buku
$query = "UPDATE tb_buku SET 
            judul_buku = '$judul', 
            pengarang = '$pengarang', 
            tahun_terbit = '$tahun', 
            kategori = '$kategori' 
          WHERE id_buku = $id";

$hasil = mysqli_query($conn, $query);

if ($hasil) {
    header('Location: index.php');
} else {
    echo "Edit data gagal. Error: " . mysqli_error($conn);
}
?>
