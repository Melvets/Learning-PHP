<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pengkondisian</title>
    <style>
        .warna-baris{
            background-color: silver;
        }
    </style>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
            <?php for ( $x = 1; $x <= 5; $x++ ) : ?> <!-- Baris  -->  
                <!-- Pengkondisian -->
                <?php if( $x % 2 == 1 ) : ?>
                    <tr class="warna-baris">
                <?php else : ?>
                    <tr>
                <?php endif; ?>
 
                    <?php for( $y = 1; $y <= 5; $y++ ) : ?> <!-- Kolom -->
                        <td><?php echo "$x, $y"; ?></td>
                    <?php endfor; ?>
                </tr>            <?php endfor; ?>
    </table>

</body>
</html>

