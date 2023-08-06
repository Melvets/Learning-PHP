 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Daftar Siswa</title>
 </head>

 <body>
     <?php
        //ASSOCIATIVE ARRAY ----------------------------------------------------------------------------------------------------------
        //  Definisinya sama seperti Array Numeric, cuman key-nya adalah string yang dibuat sendiri.
        //  Jika dituker-tuker maka tidak masalah

        // Membuat Array Asosiatif
        // Tunggal
        $siswa = [
            "nama" => "Camela Desvita Putri",
            "nis" => "83726189",
            "email" => "camelaputri1@gmail.com",
            "jurusan" => "Rekayasa Perangkat Lunak"
        ];
        //    Memanggil satu data: 
        //      echo $siswa ["jurusan"]; 

        // Ganda
        $siswa2 = [
            [
                "nama" => "Camela Desvita Putri",
                "nis" => "83726189",
                "email" => "camelaputri1@gmail.com",
                "jurusan" => "Rekayasa Perangkat Lunak",
                "gambar" => "Klee.jpg"
            ],
            [
                "nama" => "Ezaria Adiwibowo",
                "nis" => "83729747",
                "email" => "ezadi@gmail.com",
                "jurusan" => "Akuntansi Keuangan dan Lembaga",
                "gambar" => "Zack.jpg"
            ]
        ];

        //    Memanggil jurusan Ezaria:
        //      echo $siswa2 [1]["jurusan"]; 

        // Array di dalam Array ada Array
        $siswa3 = [
            [
                "nama" => "Camela Desvita Putri",
                "nis" => "83726189",
                "email" => "camelaputri1@gmail.com",
                "jurusan" => "Rekayasa Perangkat Lunak"
            ],
            [
                "nama" => "Ezaria Adiwibowo",
                "nis" => "83729747",
                "email" => "ezadi@gmail.com",
                "jurusan" => "Akuntansi Keuangan dan Lembaga",
                "tugas" => [90, 80, 100]
            ],
        ];

        //    Memanggil tugas 1 Ezaria:
        //      echo $siswa3 [1]["tugas"][0]; 

        ?>

     <?php
        // Memanggil satu string
        echo "<h3>Memanggil Satu String</h3>";

        echo $siswa["jurusan"];
        echo "<br>";
        echo $siswa["nama"];

        // Memanggil satu string - Array ganda
        echo "<h3>Memanggil Satu String - Array Ganda</h3>";

        echo $siswa2[1]["nama"];
        echo "<br>";
        echo $siswa2[1]["jurusan"];

        // Array Multidimensi
        echo "<h3>Array di dalam Array ada Array / Array Multidimensi</h3>";

        echo $siswa3[1]["tugas"][1];
        ?>

     <!-- Menampilkan Semua isi Array -->
     <h1>Daftar Siswa</h1>
     <?php foreach ($siswa2 as $sis) : ?>
         <ul>
             <li>
                 <img src="img/<?= $sis["gambar"]; ?>">
             </li>
             <li>Nama: <?= $sis["nama"]; ?></li>
             <li>NIS: <?= $sis["nis"]; ?></li>
             <li>Jurusan: <?= $sis["email"]; ?></li>
             <li>Email: <?= $sis["jurusan"]; ?></li>
         </ul>
     <?php endforeach; ?>

 </body>

 </html>