<?php

include 'functions.php';

// Koneksi ke Database
// $db = mysqli_connect("localhost", "root", "", "lt_phpdasar");

// Cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    // Ambil data dari tiap elemen dalam form
    // $nis = $_POST["nis"];
    // $nama = $_POST["nama"];
    // $email = $_POST["email"];
    // $jurusan = $_POST["jurusan"];
    // $gambar = $_POST["gambar"];

    // Query insert data
    // $query = "INSERT INTO siswa VALUES 
    //             ('', '$nis', '$nama', '$email', '$jurusan', '$gambar' )";

    // mysqli_query($db, $query);

    // Cek apakah data berhasil ditambahakan atau tidak
    // if(mysqli_affected_rows($db) > 0 ) {
        //     echo "berhasil";
    // } else {
    //     echo "gagal";
    //     echo '<br>';
    //     echo mysqli_error($db);
    // }


    // ============================================================================
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
    
    // ============================================================================

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

    <form action="" method="post">

        <ul>
            <li>
                <label for="nis">NIS : </label>
                <input id="nis" type="text" name="nis" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input id="nama" type="text" name="nama" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input id="email" type="email" name="email" required>
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input id="jurusan" type="text" name="jurusan" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input id="gambar" type="text" name="gambar" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>

    </form>
</body>
</html>