<?php 
include 'functions.php';
$siswa = query("SELECT * FROM siswa");
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
        <?php foreach ($siswa as $datasiswa) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td> <a href="">ubah</a> | <a href="">hapus</a> </td>
            <td><img src="img/<?php echo $datasiswa["gambar"]; ?>" alt="" width="50"></td>
            <td><?php echo $datasiswa["nis"]; ?></td>
            <td><?php echo $datasiswa["nama"]; ?></td>
            <td><?php echo $datasiswa["email"]; ?></td>
            <td><?php echo $datasiswa["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>