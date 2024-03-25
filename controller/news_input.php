<?php include "connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Berita</title>
</head>
<body>
    <form action="controller/input_process.php" method="post" enctype="multipart/form-data">
        Judul Berita:<br>
        <input type="text" name="judul"><br>
        Isi Berita:<br>
        <textarea name="isi"></textarea><br>
        Penulis:<br>
        <input type="text" name="penulis"><br>
        Tanggal:<br>
        <input type="date" name="tanggal"><br>
        Gambar:<br>
        <input type="file" name="gambar"><br>
        <input type="submit" value="Submit"><br>
    </form>
</body>
</html>