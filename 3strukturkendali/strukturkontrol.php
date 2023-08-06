<?php
// Pengulangan ----------------------------------------------------------------------------------------------------------
// for
    echo "<h3>Pengulangan - FOR</h3>";
    for($i = 0; $i < 5; $i++){
        echo "Hello World <br>";
    }

// while
    echo "<h3>Pengulangan - WHILE</h3>";
    $x = 0;
    while ($x < 5) {
        echo "Hello World <br>";
    $x++;
    }
    
// do.. while
    echo "<h3>Pengulangan - DO.. WHILE</h3>";
    $y = 0;
    do{
        echo "Hello World <br>";
    $y++;
    } while ( $y < 5 );

// foreach : pengulangan khusus array

// Pengkondisian ----------------------------------------------------------------------------------------------------------
// if else
    echo "<h3>Pengkondisian - IF ELSE</h3>";
    $a = 30;
    if ( $a < 20 ) {
        echo "benar";
    } else {
        echo "salah";
    }
    
// if else if else
    echo "<h3>Pengkondisian - IF ELSE IF ELSE</h3>";
    $b = 20;
    if ( $b < 20 ) {
        echo "benar";
    } else if ($b == 20 ) {
        echo "bingo!";
    } else {
        echo "salah";
    }
    
// ternary
// switch

?>