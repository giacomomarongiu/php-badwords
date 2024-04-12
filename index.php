<?php

$message = "Hello PHP";
var_dump($_GET);
$word = "$_GET[word]"

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Badwords</title>
</head>
<body>
    <h1><?php echo $word ?></h1>

    <form action="" method="get">
        <input type="text" placeholder="Inserisci un paragrafo..." name="word">
        <input type="text" placeholder="Dimmi una parolaccia...">
        <button type="submit">Invia</button>
    </form>

</body>
</html>