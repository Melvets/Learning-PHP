<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Perulangan</title>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for ($i = 1; $i <= 3; $i++ ) {
                echo "<tr>";
                for ($j = 1; $j <= 5; $j++){
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>


    
    <table border="1" cellpadding="10" cellspacing="0">
            <?php for ( $x = 1; $x <= 3; $x++ ) : ?>
                <tr>
                    <?php for( $y = 1; $y <= 5; $y++ ) : ?>
                        <td><?php echo "$x, $y"; ?></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>

</body>
</html>


