<?php 
// Array ----------------------------------------------------------------------------------------------------------
//      Array adalah sebuah variabel yang dapat menampung lebih dari satu nilai.
//      Elemen pada array boleh memiliki tipe data yang berbeda. 
//      Array adalah pasangan antara key dan value. Key-nya adalah index yang dimulai dari 0.

// Membuat Array
    // Cara lama
    $hari = array("Senin", "Selasa", "Rabu");
    // Cara Baru
    $bulan = ["Januari", "Februari", "Maret"];
    $arr1 = [123, "tulisan", false];

// Menampilkan Array
    // var_dump (Ada tipe data dan jumlah karakter)
    echo "<h3>Menampilkan Array - var_dump</h3>";
    var_dump ($hari);
    // print_r (Hanya ada key)
    echo "<h3>Menampilkan Array - print_r</h3>";
    print_r ($bulan);

// Menampilkan satu elemen saja
    echo "<h3>Menampilkan Satu Elemen</h3>";
    echo $arr1[0];
    echo "<br>";
    echo $bulan [1];
    echo "<br>";
    echo $hari [2];

// Menambahkan elemen baru pada Array
    echo "<h3>Menambahkan Elemen Baru pada Array</h3>";    
    
    var_dump ($hari);
    $hari[] = "Kamis";
    $hari[] = "Jumat";
    echo "<br>";
    var_dump ($hari);

?>