<?php include 'connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra Tierra</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-header">
        <h1>Nuestra Tierra</h1>
    </div>
    <section>
        <div>
            <ul>
                <li><a href="default.asp">Home</a></li>
                <li><a href="news.asp">News</a></li>
                <li><a href="contact.asp">Contact</a></li>
                <li><a href="about.asp">About</a></li>
            </ul>
        </div>
    </section>
    //form-input
    <section>
    <?php
    $sql = "SELECT * FROM tb_berita";
    $hasil = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($hasil) > 0) {
        while($row = mysqli_fetch_assoc($hasil)) {
            echo "<h3>".$row['judul']."</h3>";
            echo "<p>".$row['isi']."</p>";
            echo "<p>Penulis: ".$row['penulis']."</p>";
            echo "<p>Tanggal: ".$row['tanggal']."</p>";
            echo "<img src='assets/image/mabes-tni-jelaskan-kasus-oknum-prajurit-aniaya-kkb-di-papua_169.jpeg".$row['gambar']."' width='300px'><br>";
        }
    } else {
        echo "0 results";
    }
    mysqli_close($koneksi);
    ?>
    </section>
</body>
</html>