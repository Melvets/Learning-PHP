<?php 
// Koneksi ke Database ---------------------------------------------------------------
// Parameter = (nama host) , (username) , (password) , (nama database)
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// Ambil data dari tabel / Query data ------------------------------------------------
// Parameter = (Koneksi ke database/String koneksinya) , (Query)
$result = mysqli_query($db, "SELECT * FROM siswa");

// Ambil data (fetch) dari object result ---------------------------------------------
    // mysqli_fetch_row ()                      // Mengembalikan array numeric
        // $sis = mysqli_fetch_row($result);
        // var_dump($sis[3]);

    // mysqli_fetch_assoc ()                    // Mengembalikan array asosiatif
        // $sis = mysqli_fetch_assoc($result);
        // var_dump($sis["jurusan"]);
        
    // mysqli_fetch_array ()                    // Mengembalikan array numeric/aosiatif
        // $sis = mysqli_fetch_array($result);
        // var_dump($sis["jurusan"]/[2]);

    // mysqli_fetch_object ()                   // Mengembalikan nilai menggunakan panah
        // $sis = mysqli_fetch_object($result);
        // var_dump($sis -> nama);

// Menampilkan semua data menggunakan WHILE ------------------------------------------
//      while ($sis = mysqli_fetch_assoc($result) ) {
//          var_dump($sis);
//       }

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
        <?php while($row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="">edit</a> | <a href="">delete</a>
            </td>
            <td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
            <td><?php echo $row["nis"]; ?></td>
            <td><?php echo $row["nama"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>

</body>
</html>