<?php
  $i=0;
  $nombre=rand(100,999);
  while(rand(100,999)!=$nombre){
      $i++;
  }
  echo "Le nombre de tirages aléatoires est : $i";
?>
<?php
$nombre = rand(100, 999);
$tirages = 0;

for ($i = 0; ; $i++) {
    $tirage = rand(100, 999);
    $tirages++;

    if ($tirage == $nombre) {
        break;
    }
}

echo "Le nombre de tirages aléatoires est : $tirages";
?>
