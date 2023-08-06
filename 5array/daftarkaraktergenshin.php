<?php
$charGenshin = [
    [
        "id" => "892201",
        "nama" => "Kaedahara Kazuha",
        "region" => "Inazuma",
        "deskripsi" => "Seorang samurai pengembara dari Klan Kaedahara",
        "gambar" => "Kazuha.jpg"
    ],
    [
        "id" => "892202",
        "nama" => "Kamisato Ayaka",
        "region" => "Inazuma",
        "deskripsi" => "Seorang perempuan dari keluarga yang cukup ternama di Inazuma",
        "gambar" => "Ayaka.jpg"
    ],
    [
        "id" => "892203",
        "nama" => "Tartaglia Childe",
        "region" => "Snezhnaya",
        "deskripsi" => "Dia yang termuda di antara Heralds, tapi salah satu yang paling berbahaya di antara mereka.",
        "gambar" => "Childe.jpg"
    ],
    [
        "id" => "892204",
        "nama" => "Albedo",
        "region" => "Mondstadt",
        "deskripsi" => "Berasal dari Mondstadt dan dikenal sebagai seorang ilmuwan.",
        "gambar" => "Albedo.jpg"
    ],
    [
        "id" => "892205",
        "nama" => "Hutao",
        "region" => "Liyue",
        "deskripsi" => "Gadis muda dengan status sebagai master ke-77.",
        "gambar" => "Hutao.jpg"
    ],
    [
        "id" => "892206",
        "nama" => "Venti",
        "region" => "Mondstadt",
        "deskripsi" => "Penyair pecinta anggur yang berjiwa bebas di Mondstadt.",
        "gambar" => "Venti.jpg"
    ],
    [
        "id" => "892207",
        "nama" => "Zhongli",
        "region" => "Liyue",
        "deskripsi" => "Merupakan seorang konsultan misterius yang diundang oleh Wangsheng Funeral Parlor.",
        "gambar" => "Zhongli.jpg"
    ],
    [
        "id" => "892208",
        "nama" => "Xiao",
        "region" => "Liyue",
        "deskripsi" => "Sosok pendiam yang suka menyendiri.",
        "gambar" => "Xiao.jpg"
    ],
    [
        "id" => "892209",
        "nama" => "Sucrose",
        "region" => "Mondstadt",
        "deskripsi" => "seorang alkemis dari Knights of Favonius dan sangat ingin tahu tentang segala sesuatu di dunia ini.",
        "gambar" => "Sucrose.jpg"
    ],
    [
        "id" => "8922010",
        "nama" => "Ganyu",
        "region" => "Liyue",
        "deskripsi" => "keturunan Adeptus atau Qilin yang akhirnya membuat penampilan fisiknya sedikit berbeda dengan manusia.",
        "gambar" => "Ganyu.jpg"
    ],
];
?>

<h1>Daftar Karakter Genshin Impact</h1>
<?php foreach ($charGenshin as $cg) : ?>
    <ul>
        <li>
            <img src="img/<?= $cg["gambar"]; ?>">
        </li>
        <li>ID : <?= $cg["id"]; ?></li>
        <li>Nama : <?= $cg["nama"]; ?></li>
        <li>Region : <?= $cg["region"]; ?></li>
        <li>Deskripsi : <?= $cg["deskripsi"]; ?></li>
    </ul>
<?php endforeach; ?>