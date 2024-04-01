<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function estNombreArmstrong($nombre) {
    $chiffres = str_split($nombre);
    $somme = 0;
    $longueur = count($chiffres);
    
    foreach ($chiffres as $chiffre) {
        $somme += pow($chiffre, $longueur);
    }
    
    return $somme === $nombre;
}
echo "<ul>";
for ($i = 1; $i < 1000; $i++) {
    if (estNombreArmstrong($i)) {
        echo "<li>$i</li>";
    }
}
echo "</ul>";
?>

</body>
</html>
