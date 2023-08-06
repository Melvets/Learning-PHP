<?php 
include 'functions.php';
$datasiswa = query("SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <a href="tambah.php">Tambah data</a>
    <br><br>

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
            <td><img src="img/<?php echo $siswa["gambar"]; ?>" alt="" width="50"></td>
            <td><?php echo $siswa["nis"]; ?></td>
            <td><?php echo $siswa["nama"]; ?></td>
            <td><?php echo $siswa["email"]; ?></td>
            <td><?php echo $siswa["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>