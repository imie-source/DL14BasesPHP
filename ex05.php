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
      <h3>Exercice 5 :</h3>
      <?php
        $nb = rand(1,10);
        $total = 0;

        for($ii = 1; $ii <= $nb; $ii++){
          $total += $ii; // $total = $total + $ii;
        }

        echo "Somme des nombres de 1 à $nb : $total";

      ?>
    </main>
    <?php include("footer.html"); ?>
  </body>
</html>
