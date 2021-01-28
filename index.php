<?php
    $paragrafo = 'Creare una variabile con un paragrafo di testo. Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *';

    $paragrafo_censurato = str_replace($_GET["badword"], '***', $paragrafo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
    <style>
        span{
            background-color: #c8c846;
        }
    </style>
</head>
<body>
    <h1>BadWords</h1>
    <p>Query-string: <span>?badword=parola_da_censurare</span></p>
    <form method="GET">
        <label for="badword">Parola da censurare</label>
        <input type="text" name="badword" id="badword">
        <button type="submit">Invia</button>
    </form>
    <h2>Paragrafo:</h2>
    <p> <?php echo  $paragrafo_censurato; ?> </p>
    <p>La lunghezza del paragrafo originale è <?php echo strlen($paragrafo); ?> caratteri</p>
    <p>La lunghezza del paragrafo censurato è <?php echo strlen($paragrafo_censurato); ?> caratteri</p>
</body>
</html>