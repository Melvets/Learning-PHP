<?php 
require 'functions.php';
$siswa = query("SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar Siswa</h1>


    <table border="1" cellpadding= "10" cellspacing= "0">


        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($siswa as $sis): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="">edit</a> | <a href="">delete</a>
            </td>

            <td><img src="img/<?php echo $sis["gambar"]; ?>" width="50"></td>
            <td><?php echo $sis["nis"]; ?></td>
            <td><?php echo $sis["nama"]; ?></td>
            <td><?php echo $sis["email"]; ?></td>
            <td><?php echo $sis["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>
</html>