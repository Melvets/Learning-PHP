<?php 
usleep(500000);
include '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR
                                    nis LIKE '%$keyword%' OR
                                    jurusan LIKE '%$keyword%' OR
                                    email LIKE '%$keyword%'";
                                    
$datasiswa = query($query);


?>

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