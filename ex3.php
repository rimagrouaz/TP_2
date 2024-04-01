<?php
  $i=0;
  $nombre=rand(100,999);
  while(rand(100,999)!=$nombre){
      $i++;
  }
  echo "Le nombre de tirages aléatoires est : $i";
?>
<?php
  $j=0;
  $nombre=rand(100,999);
  for($i=0;$i<$j;$j++){
    if(rand(100,999)!=$nombre){
      $j++;
    }
  }
  echo "Le nombre de tirages aléatoires est : $j";
?>