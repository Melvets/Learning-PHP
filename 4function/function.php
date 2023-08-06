<?php
// Function (Date and Time) ----------------------------------------------------------------------------------------------------------
// DATE
    echo "<h3>Function - Date</h3>";
    echo date("l, d-M-Y");

// TIME
    echo "<h3>Function - Date</h3>";
    echo time();

    echo "<br><br> Menampilkan hari ini hari apa setelah ... hari <br>";
    echo date ("l", time()+172800);

    echo "<br><br>";

    // 100 hari kedepan
        $hari = date ("l, d M Y");
        $time = date ("l, d M Y", time() + 60*60*24*100);
        echo "Hari ini hari $hari, 100 hari kemudian hari $time.";

// MKTIME
    echo "<h3>Function - Mktime</h3>";
    // echo mktime (0,0,0,12,24,2005);

    echo date ("l", mktime (0,0,0,12,24,2005));

    echo "<br><br>"
    ?>
    <?php 
        $tanggal_lahir = "24 Desember 2005";
        $hari_lahir = date ("l", mktime (0,0,0,12,24,2005));
        echo "Jika saya lahir tanggal $tanggal_lahir, maka hari $hari_lahir adalah hari lahir saya.";
    ?>

    <?php 

// STSTOTIME
    echo "<h3>Function - Strtotime</h3>";
    $tanggal_lahir = "24 Desember 2005";
    $hari_lahir = date ("l", strtotime("24 dec 2005"));
    echo "Jika saya lahir tanggal $tanggal_lahir, maka hari $hari_lahir adalah hari lahir saya.";
    ?>
    

