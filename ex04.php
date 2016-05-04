<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bases PHP</title>
    <link rel="stylesheet" href="css/styles.css" media="screen" charset="utf-8">
  </head>
  <body>
    <?php include("header.html"); ?>
    <?php include("nav.html"); ?>
    <main>
      <h3>Exercice 4 :</h3>
      <?php
        $nbPhotocop = rand(1, 40);
        $total = 0;
        $tarif1 = 0.1;
        $tarif2 = 0.08;
        $tarif3 = 0.05;
        var_dump($nbPhotocop);

        if($nbPhotocop <= 10){
          $total = $nbPhotocop * $tarif1;
        }
        elseif($nbPhotocop <= 30){
          $total = $tarif1 * 10 + ($nbPhotocop - 10) * $tarif2;
        }
        else{
          $total = $tarif1 * 10 + $tarif2 * 20 + ($nbPhotocop - 30) * $tarif3;
        }

        echo "Vous devez $total € pour vos $nbPhotocop photocopies.";

      ?>
    </main>
    <?php include("footer.html"); ?>
  </body>
</html>
