<?php 
// Biasanya digunakan untuk login
// Post bisa colab dengan Get

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST1</title>
</head>
<body>
    

<!-- Mengirim data ke halaman lain -->
    <form action="POST2.php" method="post">

        Msukkan Nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name "submit">Kirim!</button>

    </form>

</body>
</html>