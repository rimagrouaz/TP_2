<?php
function estPair($nombre) {
    return $nombre % 2 == 0;
}
do {
    $nombre = rand(1, 100);
    if (estPair($nombre)) {
        echo "Nombre pair : $nombre<br>";
    } else {
        echo "Nombre impair : $nombre<br>";
    }

    if (isset($precedent_precedent) && isset($precedent) && estPair($precedent_precedent) && estPair($precedent) && !estPair($nombre)) {
        echo "Le nombre est : $precedent_precedent, $precedent, $nombre";
        break; 
    }
    $precedent_precedent = $precedent;
    $precedent = $nombre;
} while (true);
?>
