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
    <!--Navbar-->
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
        <!-- Form -->
        <form action="myscript.php" method="get">

            <div class="m-auto">
                <label class="form-label" for="paragraph_text">Inserisci qui un paragrafo ricco di brutte
                    parole:</label><br>
                <!--name="paragraph_text(variabile)"-->
                <textarea class="form-control" cols="50" rows="10" name="paragraph_text"></textarea><br><br>
            </div>
            <div class="m-auto">
                <label class="form-label" for="badword">Inserisci una parola da censurare: </label>
                <!--name="badword(variabile)"-->
                <input class="form-control" type="text" placeholder="Dimmi una parolaccia..." name="badword">
            </div>
            <!-- Button submit -->
            <button type="submit" class="btn btn-warning mt-1">Invia</button>
        </form>

    </div>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>