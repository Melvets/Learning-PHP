<?php 
// Memasukkan data $_GET melalui URL 
// http://localhost/phpdasar/latihan/5get&post/GET.php?
// (?) dibaca memasukkan data ke halaman ini
// (%20) dibaca spasi

// Menambahkan satu data
// http://localhost/phpdasar/latihan/5get&post/GET.php?nama=Camela%20Devs
//                                                     nama : key
//                                                          Camela Devs : value

// Menambahkan lebih dari satu data (menggunakan &)
// http://localhost/phpdasar/latihan/5get&post/GET.php?nama=Camela%20Devs&nrp=23389

var_dump ($_GET);

echo '';

?>