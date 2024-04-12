<?php

//$message = "Hello PHP";

//Variabile Globale
var_dump($_GET);
$paragraph_text = "$_GET[paragraph_text]";
$badword = "$_GET[badword]";
//$censored_text = str_replace(strtolower($badword), "***", strtolower($paragraph_text));
$censored_text = str_ireplace($badword, "***", $paragraph_text);

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/3a46370e2f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Php - Badwords</title>
</head>

<body>
    <header class="mb-3">
        <nav class="navbar bg-warning">
            <div class="container-fluid justify-content-center">
                <a class="navbar-brand" href="#">
                    Censuratore <i class="fa-solid fa-poop"></i>
                </a>
            </div>
        </nav>
    </header>
    <div class="container">

        <div class="outputs border border-1 p-2">

            <h1><?php echo $paragraph_text ?></h1>
            <h2>Il paragrafo contiene: <?php echo strlen($paragraph_text) ?> lettere</h2>


        </div>

        <div class="outputs mt-5  border border-1 p-2">


            <h1><?php echo $censored_text; ?></h1>
            <h2>Il paragrafo contiene: <?php echo strlen($censored_text) ?> lettere</h2>

        </div>

    </div>

</body>

</html>