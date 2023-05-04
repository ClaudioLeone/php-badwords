<?php
    $text = $_GET["text"];
    $badword = $_GET["badword"];
    $censored_text = str_replace($badword, "***", $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <title>PHP Badwords | Censura</title>
</head>
<body>
    <div class="container">
        <h2>Testo da scansionare</h2>
        <p><?php echo $text ?></p>
        <p><strong>Lunghezza del testo: </strong><?php echo strlen($text); ?> caratteri</p>
    </div>

    <div class="container">
        <h2>Testo censurato</h2>
        <p><?php echo $censored_text ?></p>
        <p><strong>Lunghezza del testo: </strong><?php echo strlen($censored_text); ?> caratteri</p>
    </div>
    
    <form class="container" action="index.php">
        <button class="btn">🔙</button>
    </form>
</body>
</html>