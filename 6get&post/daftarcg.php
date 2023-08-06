<?php 
// Mengecek apakah ada/tidak data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["id"])  || 
    !isset($_GET["region"]) ||
    !isset($_GET["deskripsi"]) ||
    !isset($_GET["gambar"])){
    // Redirect (memaksa user berpindah ke halaman lain)
    header("Location: tampilancg.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>
<body>
    <ul>
        <img src="img/<?= $_GET["gambar"]; ?>">
        <li>ID : <?= $_GET["id"]; ?></li>
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>Region : <?= $_GET["region"]; ?></li>
        <li>Deskripsi : <?= $_GET["deskripsi"]; ?></li>
    </ul>

    <a href="tampilancg.php">Kembali</a>
</body>
</html>