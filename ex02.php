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
      <h3>Exercice 2 :</h3>
      <?php
        $nb = rand(1, 100);
        echo "Nombre : $nb <br/>";

        if($nb % 2 === 0){
          echo "Ce nombre est pair";
        }
        else{
          echo "Ce nombre est impair";
        }
      ?>
    </main>
    <?php include("footer.html"); ?>
  </body>
</html>
