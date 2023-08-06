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

function tambah($data){
    global $db;
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO siswa VALUES 
        ('', '$nama', '$nis', '$email', '$jurusan', '$gambar' )";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function hapus($id){
    global $db;
    mysqli_query($db, "DELETE FROM siswa WHERE id = $id");

    return mysqli_affected_rows($db);
}

function ubah($data){
    global $db;

    $id = $data["id"];
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE siswa SET
                nis = '$nis', 
                nama = '$nama', 
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
              WHERE id = $id
                ";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db); 
}

?>