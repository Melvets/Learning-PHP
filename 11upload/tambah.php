<?php
include 'functions.php';

// Cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {



    // Cek apakah data berhasil ditambahakan atau tidak
    if(tambah($_POST) > 0 ) {
        // echo "data berhasil ditambahkan";
        echo "    
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
                </script> ";
            } else {
        // echo "data gagal ditambahkan";
        echo "
            <script>
                alert('data gagal ditambahkan!');
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
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">

        <ul>
            <li>
                <label for="nis">NIS : </label>
                <input id="nis" type="text" name="nis">
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input id="nama" type="text" name="nama">
            </li>
            <li>
                <label for="email">Email : </label>
                <input id="email" type="email" name="email">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input id="jurusan" type="text" name="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input id="gambar" type="file" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form>
</body>
</html>