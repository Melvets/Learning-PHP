<?php
// Create Function ---------------------------------------------------------------------------------------------------------- 
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-U A-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Malam", "Camela Putri"); ?></h1>
</body>
</html>