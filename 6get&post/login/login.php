<?php 

// Inisialisasi
$userData = "admin";
$passData = "admin123";

// Cek tombol submit sudah di tekan apa belum
if( isset($_POST["submit"]) ) {
    // Cek username & pasword
        if ($_POST["username"] == $userData && $_POST["password"] == $passData) {
            // jika benar, redirect ke halaman admin
                header ("Location: admin.php");
                exit;
        } else {
            // Jika salah, tampilkan pesan salah
                $error = true;
        }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        .pe{
            color: red;
            font-style: italic;
            
        }        
    </style>
</head>
<body>
    
    <h1>Login Admin</h1>

    <?php if(isset($error)) : ?>
        <p class = "pe">Username/Password salah!</p>
    <?php endif; ?>

    <ul>
    <form action="" method="post">
        
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>

    </form>
    </ul>
</body>
</html>