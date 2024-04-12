<?php

//$message = "Hello PHP";

var_dump($_GET);
$paragraph_text = "$_GET[paragraph_text]";
$badword = "$_GET[badword]";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Badwords</title>
</head>
<body>
    <h1><?php echo $paragraph_text ?></h1>
    <h1>Il paragrafo contiene: <?php echo strlen($paragraph_text) ?> parole</h1>
    <h1><?php echo $badword ?></h1>

    <form action="" method="get">
        <textarea name="paragraph_text" cols="50" rows="10"></textarea><br><br>
        <input type="text" placeholder="Dimmi una parolaccia..." name="badword">
        <button type="submit">Invia</button>
    </form>

</body>
</html>