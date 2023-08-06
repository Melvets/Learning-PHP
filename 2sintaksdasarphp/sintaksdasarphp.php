<?php

// Sintaks PHP ==================================================
// Ini adalah komentar

/* ini adalah komentar */

// Standar Output ===============================================
// 1. Echo
echo "Hello World <br>";

// 2. Print
print "Selamat Malam <br>";

// 3. Print_r 
print_r("Hello World <br>");

// 4. Var_dump /memberi informasi
var_dump("Selamat Malam");

echo "<br>";

?>

<?php
// Penulisan Sintaks PHP =======================================
// 1. PHP di dalam HTML  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Halo, Selamat Datang, <?php echo "Camela"; ?></h1>
</body>

</html>

<?php
// 2. HTML di dalam PHP
echo "<h1>Halo, Selamat Datang, Camela</h1>"
?>

<?php
// Variabel dan Tipe Data ======================================
// 1. Variabel (tidak boleh diawali angka, tetapi boleh menggunakan angka)
$nama = "Camela Desvita";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Halo, Selamat Datang, <?php echo $nama; ?></h1>
</body>

</html>

<?php
// Operator ====================================================
// 1. Aritmatika (+ , - , * , / , %)
$x = 10;
$y = 20;
echo $x * $y;

// Penggabung String / Concat (.) ===============================
$nama_depan = "Camela";
$nama_belakang = "Devs";
echo $nama_depan . " " . $nama_belakang;

// Operator Assignment ==========================================
//  =, +=, -=, *=, /=, %=, .=
$a = 1;
$a += 5; // $a = $a + 5
echo $a;

$nama = "Camela";
$nama .= " ";
$nama .= "Devs";
echo $nama;

// Operator Perbandingan (Tidak mengecek tipe datanya, mengecek nilai)
//  <, >, <=, >=, ==, !=
var_dump(1 < 5); //true
var_dump(1 == "1"); //true

// Operator Identitas (Mengecek tipe datanya) ===================
// ===, !==
var_dump(1 === "1"); //false

// Operator Logika ==============================================
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0); //true
// mengecek apakah x lebih kecil dari 20 dan x adalah bilangan bulat


?>