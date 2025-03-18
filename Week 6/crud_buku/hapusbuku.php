<?php 
include_once("koneksi.php");

$id = $_GET['id'];

// Query hapus buku
$query = "DELETE FROM tb_buku WHERE id_buku = $id";
$hasil = mysqli_query($conn, $query);

if ($hasil) {
    header('Location: index.php');
} else {
    echo "Hapus data gagal. Error: " . mysqli_error($conn);
}
?>
