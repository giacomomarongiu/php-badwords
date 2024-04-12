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
    <h1><?php echo str_replace(strtolower($badword), "***", strtolower($paragraph_text)); ?></h1>

</body>
</html>