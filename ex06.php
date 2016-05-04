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
      <h3>Exercice 6 :</h3>
      <?php
        $nb = rand(1,10);
        $total = 1;

        for($ii = 1; $ii <= $nb; $ii++){
          $total *= $ii; // $total = $total + $ii;
        }

        echo "Factorielle $nb : $total";

      ?>
    </main>
    <?php include("footer.html"); ?>
  </body>
</html>
