<?php
    $test_var = 'TEST';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>PHP Badwords</title>
</head>
<body>
    <h2>Compila e censura</h2>
    <form action="" method="GET">
        <div>
            <label for="text">Testo:</label> <br>
            <textarea name="text" id="text" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="badword">Scrivi la parola da censurare: </label>
            <input type="text" name="badword" id="badword">
        </div>

        <div>
            <button class="btn btn-green" type="submit">Censura</button>
            <button class="btn btn-red" type="reset">Annulla</button>
        </div>
    </form>
</body>
</html>