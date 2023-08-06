<?php

include 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// Query data siswa berdasarkan id
$datasiswa = query("SELECT * FROM siswa WHERE id = $id")[0];



// Cek apakah tombol submit sudah ditekan atau belum 
if( isset($_POST["submit"]) ) {
    // Cek apakah data berhasil diubah atau tidak
    if(ubah($_POST) > 0 ) {
        // echo "data berhasil ditambahkan";
        echo "    
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
                </script> ";
            } else {
        // echo "data gagal ditambahkan";
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php';
            </script> ";
        }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
</head>
<body>
    <h1>Ubah Data Siswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $datasiswa["id"]; ?>">

        <ul>
            <li>
                <label for="nis">NIS : </label>
                <input id="nis" type="text" name="nis" required 
                value="<?= $datasiswa["nis"]; ?>">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input id="nama" type="text" name="nama" required
                value="<?= $datasiswa["nama"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input id="email" type="email" name="email" required
                value="<?= $datasiswa["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input id="jurusan" type="text" name="jurusan" required
                value="<?= $datasiswa["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input id="gambar" type="text" name="gambar" required
                value="<?= $datasiswa["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>

    </form>
</body>
</html>