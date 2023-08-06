<?php 
session_start();

if ( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

include 'functions.php';

// Pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM siswa"));
// ceil dibulatkan ke atas | floor dibulatkan ke bawah | round dibulatkan diantara keduanya
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman); 

$halamanAktif = ( isset($_GET["page"]) ) ? $_GET["page"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$no = $awalData + 1;

$datasiswa = query("SELECT * FROM siswa LIMIT $awalData, $jumlahDataPerHalaman");

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
</head>
<body>
    <a href="logout.php">Logout</a>

    <h1>Daftar Siswa</h1>

    <a href="tambah.php">Tambah data</a>
    <br><br>
    
    <form action="" method="post">
        
        <input type="text" name="keyword" size="40" placeholder="Masukkan keyword pencarian ..." autocomplete="off" autofocus>
        <button type="submit" name="search">Cari!</button>

    </form>

    <br>

    <!-- Navigasi Pagination -->

    <?php if($halamanAktif > 1) : ?>
        <a href="?page=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
        <?php if( $i == $halamanAktif ) : ?>
            <a href="?page=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?page=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if($halamanAktif < $jumlahHalaman) : ?>
        <a href="?page=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

    <br>

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

        <?php foreach ($datasiswa as $siswa) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td> <a href="ubah.php?id=<?= $siswa["id"]; ?>">ubah</a> | <a href="hapus.php?id=<?= $siswa["id"]; ?>" onclick="return confirm('yakin?');">hapus</a> </td>
            <td><img src="img/upload/<?php echo $siswa["gambar"]; ?>" alt="" width="50"></td>
            <td><?php echo $siswa["nis"]; ?></td>
            <td><?php echo $siswa["nama"]; ?></td>
            <td><?php echo $siswa["email"]; ?></td>
            <td><?php echo $siswa["jurusan"]; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>
</body>
</html>