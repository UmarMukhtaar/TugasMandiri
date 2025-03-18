<?php 
include_once("koneksi.php");

$id_buku = $_POST['id_buku'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun_terbit'];
$kategori = $_POST['kategori'];

$query = "INSERT INTO tb_buku (id_buku, judul_buku, pengarang, tahun_terbit, kategori) 
          VALUES ('$id_buku', '$judul', '$pengarang', '$tahun', '$kategori')";

$hasil = mysqli_query($conn, $query);

if ($hasil) {
    header('location:index.php');
} else {
    echo "Input data gagal";
}
?>
