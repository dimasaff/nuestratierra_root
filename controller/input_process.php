<?php
include 'connect.php';

$judul = $_POST['judul'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];
$tanggal = $_POST['tanggal'];
$nama_gambar = $_FILES['gambar']['name'];
$tmp_gambar = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp_gambar, "assets/image/".$nama_gambar);

$sql = "INSERT INTO tb_berita (judul, isi, penulis, tanggal, gambar)
VALUES ('$judul', '$isi', '$penulis', '$tanggal', '$nama_gambar')";

if (mysqli_query($koneksi, $sql)) {
    echo "Berita baru berhasil ditambahkan";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>