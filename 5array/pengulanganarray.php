<?php 
// Pengulangan pada Array
    
// for / foreach
$angka = [3, 2, 15, 20, 11, 77, 89, 87, 12, 34, 42];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan Array</title>
    <style>

        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear { clear : both; }

    </style>
</head>
<body>
    
    <!-- FOR -->
    <h3>Pengulangan Array - FOR</h3>
    <?php for( $i = 0; $i < count($angka); $i++ ) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>
    
    <!-- FOREACH -->
    <h3>Pengulangan Array - FOREACH</h3>
    <?php foreach( $angka as $a) { ?>
        <div class="kotak"><?php echo $a ?></div>
    <?php } ?>

    <div class="clear"></div>

    <!-- FOREACH - Lebih Ringkas -->
    <h3>Pengulangan Array - FOREACH (Lebih Ringkas)</h3>
    <?php foreach( $angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
</body>
</html>