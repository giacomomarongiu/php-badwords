
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - Badwords</title>
</head>
<body>
    <form action="myscript.php" method="get">
        <label for="paragraph_text">Inserisci qui il paragrafo</label><br>
        <textarea cols="50" rows="10" name="paragraph_text" ></textarea><br><br>
        <label for="badword">Inserisci una parola da censurare: </label>
        <input type="text" placeholder="Dimmi una parolaccia..." name="badword">
        <button type="submit">Invia</button>
    </form>
</body>
</html>