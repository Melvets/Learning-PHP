<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{background-color: #252525;}
        *{color: #A6A6A6;}
    </style>
</head>
<body>
    
</body>
</html>

<?php
    $x = 10;

// Variable Lokal ========================================================================
echo "<p>Variable Lokal =========================================================</p>";

    // Ini akan error karena function tidak mengenali variabel x.
    // Lingkup di dalam function berbeda dengan lingkup di luar function.

    /*    
        function tampilx(){
            echo $x;
        }
    */    

// Variable Global ========================================================================
echo "<p>Variable Global =========================================================</p>";

    // Maka menggunakan keyword global untuk mencari variabel di luar function

    function tampilX() {
        global $x;
        echo $x;
    }
 
    tampilX();

    // Hasilnya adalah 10 

// Variable Superglobals ===================================================================
echo "<p>Variable Superglobals ====================================================</p>";

    // Bisa diakses dimanapun dan kapanpun di dalam halaman PHP.
    // Variabel yang sudah disediakan PHP: 
    
    //     (1) $_GET
        echo "(1) GET<br>";

                var_dump($_GET); // tidak error tetapi hasil kosong

                // Memasukkan data ke $_GET
                    echo "<p>Memasukkan data ke GET</P>";
                    
                    $_GET["nama"] = "Camela Devs";
                    $_GET["nis"] = "23389";
                    var_dump($_GET);

    //     (2) $_POST
        echo "<br>(2) POST<br>";

                var_dump($_POST); // tidak error tetapi hasil kosong

    //     (3) $_REQUEST
    //     (4) $_SESSION
    //     (5) $_COOKIE
    //     (6) $_SERVER
        echo "<br>(6) SERVER<br>";

                // var_dump($_SERVER); // Informasi mengenai server 
                echo "SERVER_NAME"." ". "= ";
                echo $_SERVER["SERVER_NAME"]; 


    //     (7) $_ENV
?>
