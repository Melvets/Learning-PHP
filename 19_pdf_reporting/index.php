<?php 
session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

include 'functions.php';

$datasiswa = query("SELECT * FROM siswa");

// Tombol cari ditekan
if(isset($_POST["search"])) {
    $datasiswa = search($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <style>
        .loader{
            width: 20px;
            position: absolute;
            top: 143px;
            left: 320px;
            z-index: -1;
            display: none;
        }
    </style>

</head>
<body>
    <a href="logout.php">Logout</a> | <a href="print.php" target="_blank">Cetak</a>

    <h1>Daftar Siswa</h1>

    <a href="tambah.php">Tambah data</a>
    <br><br>
    
    <form action="" method="post">
        
        <input type="text" name="keyword" size="40" placeholder="Masukkan keyword pencarian ..." autocomplete="off" autofocus id="keyword">
        <button type="submit" name="search" id="tombol-cari">Cari!</button>

        <img src="img/loader.gif" class="loader">

    </form>



    <br>

    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($datasiswa as $siswa) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td> <a href="ubah.php?id=<?= $siswa["id"]; ?>">ubah</a> | <a href="hapus.php?id=<?= $siswa["id"]; ?>" onclick="return confirm('yakin?');">hapus</a> </td>
                <td><img src="img/upload/<?php echo $siswa["gambar"]; ?>" alt="" width="50"></td>
                <td><?php echo $siswa["nis"]; ?></td>
                <td><?php echo $siswa["nama"]; ?></td>
                <td><?php echo $siswa["email"]; ?></td>
                <td><?php echo $siswa["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>

        </table>
    </div>    

    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>