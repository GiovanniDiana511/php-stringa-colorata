<!-- SCOPO DEL GIOCO: Stampare una stringa verde se la variabile password passata
     in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Stringa Colorata</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php

            $stringa = $_GET["password"];
            if ($stringa == "Boolean") {
                echo "<p id=verde>" . $stringa . "</p>";
            } else {
                echo "<p id=rosso>" . $stringa . "</p>";
            }
        ?>
    </body>
</html>
