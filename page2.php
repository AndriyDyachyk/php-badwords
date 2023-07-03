<?php
$badword = $_GET['badword'];
$paragrafo = $_GET['paragrafo'];
$caratteri_paragrafo = strlen($paragrafo);

$paragrafo_censurato = str_replace($badword, '***', $paragrafo);
$caratteri_nuovo_paragrafo = strlen($paragrafo_censurato);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>
<body>
    <h3>Il testo da te inserito:</h3>
    <p><?php echo $paragrafo; ?></p>
    <p>Parola da te censurata: <?php echo $badword; ?></p>
    <p>Caratteri presenti: <?php echo $caratteri_paragrafo; ?></p>
    <hr>
    <h3>Eccoti il risultato:</h3>
    <p><?php echo $paragrafo_censurato; ?></p>
    <p>Caratteri presenti: <?php echo $caratteri_nuovo_paragrafo; ?></p>
</body>
</html>