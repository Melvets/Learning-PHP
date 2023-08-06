<?php 

include 'functions.php';

if( isset($_POST['register']) ) {

    if ( registrasi($_POST) > 0 ) {
        echo "
            <script>
                alert('user baru berhasil ditambahkan!');
            </script>
        ";
    } else {
        echo mysqli_error($db);
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>label{display: block;} </style>
</head>
<body>
    
    <h1>Halaman Registrasi</h1>

    <form action="" method="post">

        <ul>
            <li>
                <label for="username">Username: </label>
                <input id="username" name="username" type="text">
            </li>
            <li>
                <label for="password">Password: </label>
                <input id="password" name="password" type="password">
            </li>
            <li>
                <label for="password2">Konfirmasi Password: </label>
                <input id="password2" name="password2" type="password">
            </li> <br>
            <li>
                <button type="submit" name="register">Register!</button>
            </li>
        </ul>

    </form>

</body>
</html>