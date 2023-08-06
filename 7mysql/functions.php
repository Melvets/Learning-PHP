<?php 
// Koneksi ke Database
$db = mysqli_connect("localhost", "root", "", "lt_phpdasar");

function query($query){
    global $db;
    $data = mysqli_query($db, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($data)){
        $rows[] = $row;
    }
    return $rows;
}

?>