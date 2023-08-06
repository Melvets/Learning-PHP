<?php 
// Koneksi ke database
$db = mysqli_connect("localhost", "root", "", "lt_phpdasar");

// Ambil data dari table siswa/query
$data = mysqli_query($db, "SELECT * FROM siswa"); 

// Ambil data (fetch) siswa dari object result
// while ($siswa = mysqli_fetch_assoc($data)){
//     var_dump($siswa);
// }


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
        <?php while($siswa = mysqli_fetch_assoc($data)) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td> <a href="">ubah</a> | <a href="">hapus</a> </td>
            <td><img src="img/<?php echo $siswa["gambar"]; ?>" alt="" width="50"></td>
            <td><?php echo $siswa["nis"]; ?></td>
            <td><?php echo $siswa["nama"]; ?></td>
            <td><?php echo $siswa["email"]; ?></td>
            <td><?php echo $siswa["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>
</body>
</html>