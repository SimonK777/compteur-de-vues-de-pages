<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Compteur de vues</title>
</head>

<body>

    <h1 class="shadow-drop-2-center">Compteur de vues en PHP</h1>
</body>

</html>



<?php

$monfichier = fopen('compteur.txt', 'r+');

$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues

fclose($monfichier);

echo '<div class="vues"><p>Cette page a été vue <span>' . $pages_vues . '</span> fois !</p></div>';
