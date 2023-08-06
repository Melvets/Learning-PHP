<?php 
// Koneksi ke Database
$db = mysqli_connect("localhost", "admin", "admin123", "lt_phpdasar");

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

    // Upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false;
    }

    $query = "INSERT INTO siswa (nama, nis, email, jurusan, gambar) VALUES 
        ('$nama', '$nis', '$email', '$jurusan', '$gambar' )";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Cek apakah tidak ada gambar yang diupload
    if ( $error === 4 ) {
        echo "
            <script>
                alert ('pilih gambar terlebih dahulu!');
            </script>
        ";

        return false;
    }

    // Cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    $namaFileDepan = explode('.', $namaFile);
    $namaFileDepan = $namaFileDepan[0];

    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "
            <script>
                alert ('Gunakan ekstensi JPG, JPEG, atau PNG!');
            </script>
        ";

        return false;
    }

    // Cek jika ukurannya terlalu besar
    if ( $ukuranFile > 1000000 ) {
        echo "
            <script>
                alert ('Ukuran gambar terlalu besar!');
            </script>
        ";

        return false;
    }

    // Lolos pengecekan
    // Generate nama gambar baru
    $namaFIleBaru = $namaFileDepan;
    $namaFIleBaru .= uniqid();
    $namaFIleBaru .= '.';
    $namaFIleBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/upload/' . $namaFIleBaru);

    return $namaFIleBaru;
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
    $gambarLama = $data["gambarLama"];

    // Cek apakah user memilih gambar baru atau tidak
    if ( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

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

function search($keyword){
    $query = "SELECT * FROM siswa WHERE nama LIKE '%$keyword%' OR
                                        nis LIKE '%$keyword%' OR
                                        jurusan LIKE '%$keyword%' OR
                                        email LIKE '%$keyword%'";

    return query($query);
}

function registrasi($data){
    global $db;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);

    // Cek username sudah ada atau belum
    $result = mysqli_query($db, "SELECT username FROM user WHERE username = '$username' ");
    if ( mysqli_fetch_assoc($result) ) {
        echo "
            <script>
                alert('username sudah terdaftar!');
            </script>
        ";
        return false;
    }

    // Cek konfirmasi password
    if ( $password !== $password2 ) {
        echo "
            <script>
                alert('konfirmasi password tidak sesuai!');
            </script>
        ";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan user baru ke database
    mysqli_query($db, "INSERT INTO user (username, password) VALUES('$username', '$password')");

    return mysqli_affected_rows($db);

}

?>