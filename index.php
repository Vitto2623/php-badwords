<?php
    $parola= $_GET['parola'];
    echo "Parola da censurare: " . $parola;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>
<body>
<pre>
    <?php
        $paragrafo = "Testo di prova in variabile, ";
        echo $paragrafo; 
        echo '<br>';
        echo strlen($paragrafo);
        echo '<br>';
        $newParagrafo = str_replace($parola, '***', $paragrafo);
        echo $newParagrafo;
        echo '<br>';
        echo strlen($newParagrafo);
    ?>
</pre>
</body>
</html>