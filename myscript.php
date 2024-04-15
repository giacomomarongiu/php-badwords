<?php

//$message = "Hello PHP";

//Variabile Globale
var_dump($_GET);
$paragraph_text = "$_GET[paragraph_text]";
$badword = "$_GET[badword]";
//$censored_text = str_replace(strtolower($badword), "***", strtolower($paragraph_text));
$censored_text = str_ireplace($badword, "***", $paragraph_text);

//Variabile numerica
$bigger_paragraph = max(strlen($paragraph_text), strlen($censored_text))
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
    <!--Nav-->
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

        <!--Results-->
        <div class="outputs border border-1 p-2">
            <p>Il tuo testo è:</p>
            <h1><?php echo $paragraph_text ?></h1>
            <h2>Il paragrafo contiene: <?php echo strlen($paragraph_text) ?> lettere</h2>


        </div>

        <div class="outputs mt-5  border border-1 p-2">

            <p>Il tuo testo censurato è:</p>
            <h1><?php echo $censored_text; ?></h1>
            <h2>Il paragrafo contiene: <?php echo strlen($censored_text) ?> lettere</h2>

        </div>

        <div class="outputs mt-5  border border-1 p-2">

            <p>Il tuo testo censurato al contrario è:</p>
            <h1><?php echo strrev($censored_text); ?></h1>
            <h2>Il paragrafo contiene: <?php echo strlen($censored_text) ?> lettere</h2>

        </div>

        <div class="outputs mt-5  border border-1 p-2">

            <p>Il tuo testo censurato al contrario che va a capo ogni 10 caratteri è:</p>
            <h1><?php echo wordwrap(strrev($censored_text), 10, "<br />\n"); ?></h1>
            <h2>Il paragrafo contiene: <?php echo strlen($censored_text) ?> lettere</h2>

        </div>

        <div class="outputs mt-5  border border-1 p-2">

            <p>Il tuo testo più lungo tra censurato e non censurato è lungo:</p>
            <h1><?php echo $bigger_paragraph ?></h1>
            <p>Il cui Algortimo Naturale è</p>
            <h1><?php echo log($bigger_paragraph) ?></h1>
            <p>Con soli due decimali:</p>
            <h1><?php echo number_format(log($bigger_paragraph), 2) ?></h1>


        </div>


    </div>

</body>

</html>