<?php 
$siswa = [
    ["Camela Desvita Putri", "12345678", "Rekayasa Perangkat Lunak", "camelaputri1@gmail.com"],
    ["Muhammad Nazril Ilham", "92749872", "Otomatisasi Tata Kelola Perkantoran", "ilhamjepara@gmail.com"],
    ["Ezaria Adiwibowo", "83729747", "Akuntansi Keuangan dan Lembaga", "ezadi@gmail.com"]

];
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
 </head>
 <body>
    
<h1>Daftar Siswa</h1>
<?php foreach ($siswa as $sis): ?>
    <ul>
        <li>Nama: <?= $sis[0]; ?></li>
        <li>NIS: <?= $sis[1]; ?></li>
        <li>Jurusan: <?= $sis[2]; ?></li>
        <li>Email: <?= $sis[3]; ?></li>
    </ul>
<?php endforeach; ?>

 </body>
 </html>