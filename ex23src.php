<?php

$p1 = 2;
$p2 = 5;
$p3 = 10;
$goal = 100;
$nb = 0;

for($ii = 0; $ii <= ($goal / $p3); $ii++){
  for($jj = 0; $jj <= ($goal / $p2); $jj++){
    for($kk = 0; $kk <= ($goal / $p1); $kk++){
      if($ii * $p3 + $jj * $p2 + $kk * $p1 === $goal){
        $nb++;
        echo "$ii pièce de $p3 c - $jj pièce de $p2 c - $kk pièce de $p1 c <br/>";
      }
    }
  }
}
echo $nb . " combinaisons";
